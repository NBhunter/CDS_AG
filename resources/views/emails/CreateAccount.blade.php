
@component('mail::message')
Xin Chào {{  $ten }}!!

tài khoảng của bạn đã được tạo với
email: {{ $email }}
Mật khẩu mặc định: {{ $mk }}
VUI LÒNG ĐỔI MẬT KHẨU SAU KHI ĐĂNG NHẬP LẦN ĐẦU!!
@component('mail::button', ['url' => 'http://127.0.0.1:8000/'.$GOTO])
Đánh giá
@endcomponent

Thanks,<br>
CHUYỂN ĐỔI SỐ TỈNH AN GIANG
@endcomponent
