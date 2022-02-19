<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function logout()
    {
        Auth::guard('user')->logout();


?>
        <script>
            alert('ออกจากระบบสำเร็จ');
            top.window.location.replace("<?= URL::to('/') ?>/login");
        </script>
        <?php
    }

    public function checkLogin(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if ($user && Hash::check($request->password, $user->password)) {
            Auth::guard('user')->login($user);
        ?>
            <script>
                alert('เข้าสู่ระบบสำเร็จ');
                top.window.location.replace("<?= URL::to('/') ?>/profile");
            </script>
        <?php
        } else {
        ?>
            <script>
                alert('ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง');
            </script>
        <?php
        }
    }

    public function load_register(Request $request)
    {
        if ($request->password != $request->password1) {

        ?>
            <script>
                alert('รหัสผ่านไม่ตรงกัน');
                document.getElementById("password1").focus();
            </script>
        <?php
            exit();
        }
        $userdata = User::where('email', $request->email)->first();
        if (!empty($userdata)) {
        ?>
            <script>
                alert('มีผู้ใช้งานแล้ว');
                $('#email').focus();
            </script>
        <?php
            exit();
        }
        $user = [
            "id_role" => 0,
            "Fname" => $request->Fname,
            "Lname" => $request->Lname,
            "gender" => $request->gender,
            "email" => $request->email,
            "phone" => $request->phone,
            "password" => Hash::make($request->password),
            "id_user" => date('YmdHis')
        ];

        $res = User::create($user);
        if ($res) {
        ?>
            <script>
                alert('สมัครสำเร็จ');
                top.window.location.replace("<?= URL::to('/') ?>/login");
            </script>
<?php
        }
    }
}
