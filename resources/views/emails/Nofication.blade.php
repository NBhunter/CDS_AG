
@component('mail::message')
Xin Chào Doanh Nghiệp!!

Bạn đã quên đánh giá phiếu số 1 trong quí này
vui lòng thực hiện đánh giá bằng nút phía dưới.

@component('mail::button', ['url' => 'http://127.0.0.1:8000/phieudanhgia1'])
Đánh giá
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
