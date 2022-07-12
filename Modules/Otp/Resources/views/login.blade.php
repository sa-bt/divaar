@extends('core::layouts.app')

@section('content')
    <section class="w-full h-screen flex flex-col ">
        <div class="flex items-center justify-between w-full p-4 shadow">
            <h1 class="text-lg font-bold">ورود به حساب کاربری</h1>
            <span>x</span>
        </div>


        <div class="mt-6 px-4">
            <h1> شماره موبایل خود را وارد کنید</h1>
            <p class="mt-4 text-sm text-gray-500">در وارد کردن اطلاعات دقت فرمایید. کد تایید به شماره وارد شده در کادر زیر ارسال می گردد</p>
            <label class="relative">
                <input type="tel" class="mt-4 w-full rounded-md bg-gray-100 border
                border-rose-100 border-opacity-0 outline-none pt-1.5 pb-1 pl-12 pr-28
                text-gray-600 transition transition-all duration-200 focus:border-opacity-100 "
                       maxlength="11" dir="ltr">
                <span class="absolute left-4 text-gray-500" dir="ltr">+98</span>
                <span class="absolute right-4 text-gray-500" dir="ltr">شماره موبایل</span>
            </label>
        </div>
    </section>
@endsection
