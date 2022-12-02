<?php

namespace App\Http\Controllers\panel;

use App\Events\NewComment;
use App\Events\NewMessage;
use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Message;
use App\Models\Requst;
use App\Models\step;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class apiRequstController extends Controller
{


    public function update()
    {

        $status = \request('status');
        switch ($status) {
            case 6:
//                $validation = Validator::make(\request()->all(), [
//                    'givenName' => 'required|string',
//                    'familyName' => 'required|string',
//                    'middleName' => 'string',
//                    'mailing' => 'required',
//                    'phoneNumber' => 'required',
//                    'gender' => 'required',
//                    'expiryDate' => 'required',
//                    'passportNumber' => 'required',
//                    'countryCitizenship' => 'required',
//                ]);
//
//                if ($validation->fails()) {
//                    return response()->json(['error', $validation->messages()]);
//                }
                $requestStatus = User::find(\request('id'));

                if ($requestStatus['status_request'] == $status) {
                    $status = $status - 1;
                    if ($request = Requst::query()->where('user_id', \request('id'))->first()) {
                        $requestUpdate = Requst::find($request['id']);
                        $requestUpdate->update([
                            'status_request' => 'Personal'
                        ]);
                    } else {
                        Requst::query()->create([
                            'name' => $requestStatus['name'],
                            'email' => $requestStatus['email'],
                            'user_id' => $requestStatus['id'],
                            'phone_Number' => $requestStatus['phoneNumber'],
                            'status_request' => $status
                        ]);
                    }

                    $requestStatus->update([
                        'status_request' => $status
                    ]);
                }

                $requestStatus->update([
                    'givenName' => \request('givenName'),
                    'middleName' => \request('middleName'),
                    'familyName' => \request('familyName'),
                    'birthDate' => \request('birthDate'),
                    'countryCitizenship' => \request('countryCitizenship'),
                    'gender' => \request('gender'),
                    'phoneNumber' => \request('phoneNumber'),
                    'address' => \request('address'),
                    'mailing' => \request('mailing'),
                    'emergency' => \request('emergency'),
                    'passportNumber' => \request('passportNumber'),
                    'expiryDate' => \request('expiryDate')
                ]);
                return response()->json($requestStatus);
            case 5:
                $validation = Validator::make(\request()->all(), [
//                    'givenName'=>'required|string',
//                    'familyName'=>'required|string',
//                    'middleName'=>'string',
//                    'mailing'=>'required',
//                    'phoneNumber'=>'required',
//                    'gender'=>'required',
//                    'expiryDate'=>'required',
//                    'passportNumber'=>'required',
//                    'countryCitizenship'=>'required',
                ]);
//                if ($validation->fails()){
//                    return response()->json(['error',$validation->messages()]);
//                }
                $requestStatus = User::find(\request('id'));
                if ($requestStatus['status_request'] == $status) {
                    $status = $status - 1;
                    if ($request = Requst::query()->where('user_id', \request('id'))->first()) {
                        $requestUpdate = Requst::find($request['id']);
                        $requestUpdate->update([
                            'status_request' => 'Education'
                        ]);
                    } else {
                        Requst::query()->create([
                            'name' => $requestStatus['name'],
                            'email' => $requestStatus['email'],
                            'user_id' => $requestStatus['id'],
                            'phone_Number' => $requestStatus['phoneNumber'],
                            'status_request' => $status
                        ]);
                    }
                    $requestStatus->update([
                        'status_request' => $status,
                    ]);
                }
                $requestStatus->update([
                    'highestLevelEducation' => \request('highestLevelEducation'),
                    'countryEducation' => \request('countryEducation'),
                    'fieldStudy' => \request('fieldStudy'),
                    'yearGraduation' => \request('yearGraduation'),
                    'GPA' => \request('GPA'),
                    'school' => \request('school')
                ]);
                return response()->json($requestStatus);
                break;
            case 4:

                $requestStatus = User::find(\request('id'));
                if ($requestStatus['status_request'] == $status) {
                    $status = $status - 1;
                    if ($request = Requst::query()->where('user_id', \request('id'))->first()) {
                        $requestUpdate = Requst::find($request['id']);
                        $requestUpdate->update([
                            'status_request' => 'Language'
                        ]);
                    } else {
                        Requst::query()->create([
                            'name' => $requestStatus['name'],
                            'email' => $requestStatus['email'],
                            'user_id' => $requestStatus['id'],
                            'phone_Number' => $requestStatus['phoneNumber'],
                            'status_request' => $status
                        ]);
                    }
                    $requestStatus->update([
                        'status_request' => $status,
                    ]);
                }
                $requestStatus->update([
                    'language' => \request('language')
                ]);
                return response()->json($requestStatus);

                break;
            case 3:
                $requestStatus = User::find(\request('id'));
                if ($requestStatus['status_request'] == $status) {
                    $status = $status - 1;
                    if ($request = Requst::query()->where('user_id', \request('id'))->first()) {
                        $requestUpdate = Requst::find($request['id']);
                        $requestUpdate->update([
                            'status_request' => 'Upload'
                        ]);
                    } else {
                        Requst::query()->create([
                            'name' => $requestStatus['name'],
                            'email' => $requestStatus['email'],
                            'user_id' => $requestStatus['id'],
                            'phone_Number' => $requestStatus['phoneNumber'],
                            'status_request' => $status
                        ]);
                    }
                    $requestStatus->update([
                        'status_request' => $status,
                    ]);
                }
                $requestStatus->update([
                    'passportBio' => \request('passport'),
                    'NationalIDCard' => \request('national'),
                    'educationCertificate' => \request('education'),
                    'CV' => \request('CV'),
                    'GRE' => \request('GRE'),

                ]);
                return response()->json($requestStatus);

                break;
            case 2:
                $requestStatus = User::find(\request('id'));
                if ($requestStatus['status_request'] == $status) {
                    if ($request = Requst::query()->where('user_id', \request('id'))->first()) {
                        $request->update([
                            'status_request' => 'Apply',

                        ]);

                    }
                }
                $requestStatus->update([
                    'countryInsert' => \request('countryInsert'),
                    'fieldInsert' => \request('fieldInsert'),
                    'pending' => 1

                ]);
                return response()->json($requestStatus,);
                break;


        }
    }

    public function uploade()
    {
        $file = \request('file');
        $path = '/assets/media/upload/' . date('Y-m-d' . '/');
        $filename = date('Y-m-d') . ' u-' . $file->getClientOriginalName();
        $file->move(public_path($path), $filename);
        $filename = $path . $filename;
        return response()->json($filename);
    }

    public function update_request()
    {
//        return response()->json([\request()->all()]);

        $check = false;
        $value = null;
        if (\request('step-1')) {
            $check = [];
            for ($x = 0; $x < 7 - User::query()->where('id', \request('id'))->first()['status_request'] - 1; $x++) {

                $value = explode('@', \request('step-' . $x + 1));

//                if (count($value)!=2){
//                    return response()->json([$value,$x]);
//
//                }

                $value[1] == 'true' ? array_push($check, $value[0]) : '';

            }
        }
//        return response()->json([$check, \request()->all()]);

        $user = User::find(\request('id'));
        $request = Requst::find(\request('id_request'));
        $user->update([
            'status_request' => \request('select')
        ]);
        $step = step::query()->where('id_step', '>=', \App\Models\User::query()->where('id', \request('id'))->first()['status_request'] - 1)->get();
        switch (\request('select')) {
            case 6:
                $request->update([
                    'status_request' => 'Contact'
                    , 'check' => json_encode($check)
                ]);
                return response()->json([200, 'Contact', $step]);
            case 5:
                $request->update([
                    'status_request' => 'Personal'
                    , 'check' => json_encode($check)

                ]);
                return response()->json([200, 'Personal', $step]);

            case 4:
                $request->update([
                    'status_request' => 'Job'
                    , 'check' => json_encode($check)

                ]);
                return response()->json([200, 'Job', $step]);

            case 3:
                $request->update([
                    'status_request' => 'Language'
                    , 'check' => json_encode($check)

                ]);
                return response()->json([200, 'Language', $step]);

            case 2:
                $request->update([
                    'status_request' => 'Apply'
                    , 'check' => json_encode($check)

                ]);
                return response()->json([200, 'Apply', $step]);


        }

    }

    public function delete_request()
    {
        Requst::destroy(\request('id'));
        User::find(\request('user_id'))->update([
            'status_request' => 6
        ]);
        return response()->json(200);
    }

    public function get()
    {
        $messages = Message::query()->Where('to_user', intval(\request('to_user')))->orWhere('from_user', intval(\request('to_user')))->get();

        return response()->json(User::query()->where('id', \request('id'))->first());
    }

    public function save()
    {
        $validation = Validator::make(\request()->all(), [
            'id' => 'required',
            'name_modal' => 'required',
            'email_modal' => 'required|email',
            'rule_modal' => 'required'
        ]);
        if ($validation->fails()) {
            return response()->json(['errors' => $validation->errors()]);
        }
        $user = User::find(\request('id'));
        $user->update([
            'name' => \request('name_modal'),
            'email' => \request('email_modal'),
            'rule' => \request('rule_modal')
        ]);
        return response()->json([200, $user]);

    }

    public function getUser()
    {
        return response()->json(User::query()->find(\request('id')));
    }


    public function updateStatus()
    {
        $messages = Message::query()->where('to_user', \request('id'))->get();
        foreach ($messages as $message) {
            $check = Message::find($message['id']);
            $check->update([
                'status' => 'true'
            ]);
        }

    }

}
