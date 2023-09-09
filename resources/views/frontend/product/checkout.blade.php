@extends('frontend.layout.front.main')
@section('content')
<div class="container">
    <div class="row" style="margin: 20px; height: auto;">
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Billing address</h4>
            <form method="POST" action="{{route('store_order')}}">
                @csrf
                <input type="hidden" value="{{$check['_name']}}" name="_name">
                <input type="hidden" value="{{$check['_image']}}" name="_image">
                <input type="hidden" value="{{$check['_size']}}" name="_size">
                <input type="hidden" value="{{$check['_color']}}" name="_color">
                <input type="hidden" value="{{$check['_count']}}" name="_count">
                <input type="hidden" value="{{$check['_total']}}" name="_total">
                <div class="mb-3">
                    <label for="name">User Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Inter Your Name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="name">Phone</label>
                    <input type="text" class="form-control" id="name" placeholder="Inter Your Name" name="phone" required>
                </div>
                <div class="mb-3">
                    <label for="email">Email <span class="text-muted">(Optional)</span></label>
                    <input type="email" class="form-control" id="email" placeholder="you@example.com" name="email" required>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="state">Address</label>
                        <select class="custom-select d-block w-100" id="state" required="" name="address">
                            <option value="">Choose...</option>
                            <option value="45-الزمالك">الزمالك</option>
                            <option value="45-الدميرية">الدميرية</option>
                            <option value="45-السيدة زينب">السيدة زينب</option>
                            <option value="45-باب الشعرية">باب الشعرية</option>
                            <option value="45-حدائق القبة">حدائق القبة</option>
                            <option value="45-مساكن الرماية">مساكن الرماية</option>
                            <option value="45-الدقى">الدقى</option>
                            <option value="45-مصر الجديدة">مصر الجديدة</option>
                            <option value="45-مدينة نصر">مدينة نصر</option>
                            <option value="45-المنيل">المنيل</option>
                            <option value="45-جسر السويس">جسر السويس</option>
                            <option value="45-الهرم">الهرم</option>
                            <option value="45-فيصل">فيصل</option>
                            <option value="45-المعادى">المعادى</option>
                            <option value="45-الشيخ زايد">الشيخ زايد</option>
                            <option value="45-التحرير">التحرير</option>
                            <option value="45-المهندسين">المهندسين</option>
                            <option value="45-شبرا مصر">شبرا مصر</option>
                            <option value="45-الزيتون">الزيتون</option>
                            <option value="45-رمسيس">رمسيس</option>
                            <option value="45-المطرية">المطرية</option>
                            <option value="45-سرايا القبة">سرايا القبة</option>
                            <option value="45-المقطم">المقطم</option>
                            <option value="45-العباسية">العباسية</option>
                            <option value="45-اكتوبر">اكتوبر</option>
                            <option value="45-حلوان">حلوان</option>
                            <option value="45-حدائق">حدائق</option>
                            <option value="45-الاهرام">الاهرام</option>
                            <option value="45-طره البلد">طره البلد</option>
                            <option value="45-التجمعات">التجمعات</option>
                            <option value="45-العبور">العبور</option>
                            <option value="45-مدينتى">مدينتى</option>
                            <option value="45-الشروق">الشروق</option>
                            <option value="45-المعصره">المعصره</option>
                            <option value="45-عين شمس">عين شمس</option>
                            <option value="45-المعتمدة">المعتمدة</option>
                            <option value="45-شبرا الخيمة">شبرا الخيمة</option>
                            <option value="45-براجيل">براجيل</option>
                            <option value="45-امبابة">امبابة</option>
                            <option value="45-مؤسسة الزكاة">مؤسسة الزكاة</option>
                            <option value="45-بولاق الدكرور">بولاق الدكرور</option>
                            <option value="45-الزاوية الحمرا">الزاوية الحمرا</option>
                            <option value="45-الخصوص">الخصوص</option>
                            <option value="45-المرج">المرج</option>
                            <option value="45-بشتيل">بشتيل</option>
                            <option value="45-السلام">السلام</option>
                            <option value="45-عزبة النخل">عزبة النخل</option>
                            <option value="55-اوسيم">اوسيم</option>
                            <option value="55-ناهية البلد">ناهية البلد</option>
                            <option value="55-خانكة">خانكة</option>
                            <option value="55-الجبل الاصفر">الجبل الاصفر</option>
                            <option value="55-ابو النمرس">ابو النمرس</option>
                            <option value="55-كرداسكة">كرداسكة</option>
                            <option value="55-العاشر من رمضان">العاشر من رمضان</option>
                            <option value="55-منيل شيحة">منيل شيحة</option>
                            <option value="55-صفط اللبن">صفط اللبن</option>
                            <option value="55-مايو">مايو</option>
                            <option value="55-الخوامدية">الخوامدية</option>
                            <option value="55-مدينة بدر">مدينة بدر</option>
                            <option value="55-الصف">الصف</option>
                            <option value="55-البدراشين">البدراشين</option>
                            <option value="55-برطس">برطس</option>
                            <option value="55-عياط">عياط</option>
                            <option value="55-اطفيح">اطفيح</option>
                            <option value="55-سقارة">سقارة</option>
                            <option value="70-الاسكندرية">الاسكندرية</option>
                            <option value="70-الاسماعلية">الاسماعلية</option>
                            <option value="70-كفر الشيخ">كفر الشيخ</option>
                            <option value="70-دمياط">دمياط</option>
                            <option value="70-بنها">بنها</option>
                            <option value="70-البحيرة">البحيرة</option>
                            <option value="70-الشرقية">الشرقية</option>
                            <option value="70-الغربية">الغربية</option>
                            <option value="70-طنطا">طنطا</option>
                            <option value="70-المنصورة">المنصورة</option>
                            <option value="70-السويس">السويس</option>
                            <option value="70-بورسعيد">بورسعيد</option>
                            <option value="70-القليوبية">القليوبية</option>
                            <option value="70-المنوفية">المنوفية</option>
                            <option value="70-الدقهلية">الدقهلية</option>
                            <option value="70-الزقازيق">الزقازيق</option>
                            <option value="85-سوهاج">سوهاج</option>
                            <option value="85-قنا">قنا</option>
                            <option value="85-اسوان">اسوان</option>
                            <option value="85-مرسي مطروح">مرسي مطروح</option>
                            <option value="85-المنيا">المنيا</option>
                            <option value="85-الساحل الشمالى">الساحل الشمالى</option>
                            <option value="85-الاقصر">الاقصر</option>
                            <option value="85-الفيوم">الفيوم</option>
                            <option value="85-اسيوط">اسيوط</option>
                            <option value="85-بنى سويف">بنى سويف</option>
                            <option value="120-جنوب سيناء">جنوب سيناء</option>
                            <option value="120-البحر الاحمر">البحر الاحمر</option>
                            <option value="120-شرم الشيخ">شرم الشيخ</option>
                            <option value="120-الغردقة">الغردقة</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="name">Address</label>
                    <input type="text" class="form-control" id="name" placeholder="123 Street address" name="street" required>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="state">Gender</label>
                        <select class="custom-select d-block w-100" id="state" required="" name="state">
                            <option value="">Choose Your Gender</option>
                            <option>female</option>
                            <option>male</option>
                        </select>
                    </div>
                </div>
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit" onclick="clickCounter()">Continue to checkout</button>
            </form>
        </div>
    </div>
</div>
@endsection
