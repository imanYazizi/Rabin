<?php

use App\Models\PackagePermission;
use App\Models\Site;
use App\Models\SiteRolePermission;
use App\Models\SitePermission;
use Illuminate\Support\Facades\Storage;

function _can($action, $is_403 = false)
{
    if (auth()->guard('admins')->check()) {
        $admin = auth()->guard('admins')->user();
//        die(json_encode($admin));
        if ($admin->role == 'see' && $action == 'read')
            return true;


        if ($admin->role == 'edit' && ($action == 'read' || $action == 'create' || $action == 'update' || $action == 'delete'))
            return true;


        return $is_403 ? abort(403) : false;
    } else
        return $is_403 ? abort(403) : false;
}

function _package($model, $is_403 = false)
{
    if (auth()->guard('admins')->check()) {
        $admin = auth()->guard('admins')->user();
        $package_id = Site::query()->findOrFail($admin->site_id)->package_id;
        $permisson = PackagePermission::query()->where('package_id', $package_id)->where('model_name', $model)->first();
        if ($permisson)
            return true;
        return $is_403 ? abort(403) : false;
    } else
        return $is_403 ? abort(403) : false;
}

function getFile($file)
{
    $json = json_decode(str_replace("\\", "/", $file));
    if (count($json) > 0) {

        return Storage::url($json[0]->download_link);
    }
    return '';
}

if (!function_exists('setting')) {
    function setting($key, $default = null)
    {
        return TCG\Voyager\Facades\Voyager::setting($key, $default);
    }
}

if (!function_exists('menu')) {
    function menu($menuName, $type = null, array $options = [])
    {
        return TCG\Voyager\Facades\Voyager::model('Menu')->display($menuName, $type, $options);
    }
}

if (!function_exists('voyager_asset')) {
    function voyager_asset($path, $secure = null)
    {
        return route('voyager.voyager_assets') . '?path=' . urlencode($path);
    }
}

if (!function_exists('get_file_name')) {
    function get_file_name($name)
    {
        preg_match('/(_)([0-9])+$/', $name, $matches);
        if (count($matches) == 3) {
            return Illuminate\Support\Str::replaceLast($matches[0], '', $name) . '_' . (intval($matches[2]) + 1);
        } else {
            return $name . '_1';
        }
    }
}

if (!function_exists('Kavenegar')) {

    /*
    * @param $phone
    * @param $message
    * @return mixed
        * Gets the phone and a message, calls kavenegar send message api.
     */
    function Kavenegar($phone, $message, $send = false, $override = false)
    {

        if ($send) {
            $sms = \TCG\Voyager\Models\Sms::first();
            if ($sms->stock > 0 || $override) {
                $curl = curl_init();
                curl_setopt_array($curl, [
                    CURLOPT_URL => "https://api.kavenegar.com/v1/" . config('Constants.SMS_API') . "/sms/send.json",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 30,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "POST",
                    CURLOPT_POSTFIELDS => [
                        'receptor' => $phone,
                        'message' => $message,
                    ],
                ]);
                $response = curl_exec($curl);
                curl_close($curl);
                $response = json_decode($response);
//                die(json_encode($response));
                //dd($response);
                if ($response->entries && $response->entries[0] && env('APP_DEBUG') == true) {
                    \Illuminate\Support\Facades\Log::info($response->entries[0]->statustext);
                }

                if ($response->return && env('APP_DEBUG') == true) {
                    \Illuminate\Support\Facades\Log::info("SMS / code" . $response->return->status . " : " . $response->return->message);
                }

                if ($response->return->status == 200) {
                    $sms->sends += 1;
                    $sms->totalsend += 1;
                    $sms->stock -= 1;
                    $sms->save();
                }

                return $response;
            } else {
                return false;
            }
        }
        $sms = \TCG\Voyager\Models\Sms::first();
        if ($sms->stock > 0 || $override) {
            $curl = curl_init();
            curl_setopt_array($curl, [
                CURLOPT_URL => "https://api.kavenegar.com/v1/" . config('Constants.SMS_API') . "/verify/lookup.json",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => [
                    'receptor' => $phone,
                    'token' => $message,
                    'template' => "rooyesh",
                ],
            ]);
            $response = curl_exec($curl);
            curl_close($curl);
            $response = json_decode($response);
            //dd($response);
            if ($response->entries && $response->entries[0] && env('APP_DEBUG') == true) {
                \Illuminate\Support\Facades\Log::info($response->entries[0]->statustext);
            }

            if ($response->return && env('APP_DEBUG') == true) {
                \Illuminate\Support\Facades\Log::info("SMS / code" . $response->return->status . " : " . $response->return->message);
            }

            if ($response->return->status == 200) {
                $sms->sends += 1;
                $sms->totalsend += 1;
                $sms->stock -= 1;
                $sms->save();
            }

            return $response;
        } else {
            return false;
        }
    }
}

if (!function_exists('fa_number')) {
    function fa_number($number, $flip = false)
    {
        if (empty($number)) {
            return '۰';
        }

        $en = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];
        $fa = ["۰", "۱", "۲", "۳", "۴", "۵", "۶", "۷", "۸", "۹"];
        if ($flip) {
            return str_replace($fa, $en, $number);
        } else {
            return str_replace($en, $fa, $number);
        }

    }
}

if (!function_exists('json_printer')) {
    function json_printer($data)
    {
        $html = '<div class="tablesimpleresponsive">
          <table class="tablesimple" style="min-width:auto">
            <thead>
              <tr>
                <th>' . __('hotdesk.read_table_title') . '</th>
                <th>' . __('hotdesk.read_table_info') . '</th>
              </tr>
            </thead>
            <tbody>';
        foreach ($data as $keydata => $dataof) {
            $html .= '<tr>
                <td>' . $keydata . '</td>
                <td>';
            if (is_array($dataof)) {
                $html .= json_printer($dataof);
            } else {
                try {
                    $decrypted = Crypt::decryptString($dataof);
                    if (is_serialized_string($decrypted)) {
                        $decrypted = unserialize($decrypted);
                        if (is_object($decrypted)) {
                            $html .= json_printer($decrypted);
                        }

                    }
                } catch (Illuminate\Contracts\Encryption\DecryptException $e) {
                    $decrypted = $dataof;
                }
                if (!is_object($decrypted)) {
                    $html .= '<span>' . $decrypted . '</span>';
                }

            }
            $html .= '</td>
              </tr>';
        }
        $html .= '</tbody>
          </table>
      </div>
    </div>';
        return $html;
    }
}


if (!function_exists('_response')) {
    /*
    * @param null $data
    * @param string|null $message
    * @param bool $status
    * @param int $code
    * @return JsonResponse
        */
    function _response($data = null, $message = null, bool $status = true, $code = 200)
    {
        return response()->json([
            "data" => $data ?? [],
            "message" => $message ?? "",
            "status" => $status,
        ], $code ?? 200);
    }
}

if (!function_exists('get_image')) {
    function get_image($image)
    {
        if (!isset($image) || $image == "") {
            return "";
        }

        if (substr_count($image, 'http') == 0) {
            if (substr_count($image, 'storage') > 0) {
                if (substr_count($image, '/storage') > 0) {
                    $image = config('app.url') . $image;
                } else {
                    $image = config('app.url') . '/' . $image;
                }

            } else {
                $image = config('app.url') . '/storage/' . $image;
            }
        }

        return preg_replace("/ /", "%20", $image);
    }
}

if (!function_exists("watermarkPhoto")) {

    function watermarkPhoto(string $originalFilePath, string $filePath2Save, string $watermark_path)
    {

        //        $watermark_path = 'photos/watermark.png';
        //        if(File::exists($watermark_path)){
        if (Storage::disk('public')->exists($watermark_path)) {
            $watermarkImg = Image::make(Storage::disk("public")->get($watermark_path));
            $img = Image::make(Storage::disk("public")->get($originalFilePath));
            $wmarkWidth = $watermarkImg->width();
            $wmarkHeight = $watermarkImg->height();

            $imgWidth = $img->width();
            $imgHeight = $img->height();

            $x = 0;
            $y = 0;
            while ($y <= $imgHeight) {
                $img->insert(Storage::disk("public")->get($watermark_path), 'top-left', $x, $y);
                $x += $wmarkWidth;
                if ($x >= $imgWidth) {
                    $x = 0;
                    $y += $wmarkHeight;
                }
            }
            $img->save($filePath2Save);

            $watermarkImg->destroy();
            $img->destroy(); //  to free memory in case you have a lot of images to be processed
        } else {
            return false;
        }
        return $filePath2Save;
    }
}

if (!function_exists("getFileSize")) {
    function getFileSize($file)
    {

        $file = json_decode($file, true)[0]["download_link"];

        if (Storage::exists($file)) {
            return number_format((Storage::size($file) / 1024 / 1024), 2, '.', "");
        } else {
            return -1;
        }
    }
}
