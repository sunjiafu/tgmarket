<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>最便宜的价格购买真实的Telegram会员--{{ config('app.name') }}</title>
  <meta name="description" content="如果您想通过购买真实的Telegram会员来营销您的群组或频道，只需要在本站注册成为会员，我们为用户提供全天候24/7的客户支持，提供最便宜且优质的服务">


  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('js/app.js') }}">
 
  <script src="/js/flowbite.js"></script>




  <!-- Styles -->

</head>

<div>

  <!-- Section: Design Block -->
  <section class="mb-10">

    <x-Nav />
    <div class="px-6 py-6 md:px-12 bg-gray-100 text-gray-800 text-center lg:text-left">
      <div class="container mx-auto xl:px-32">
        <div class="grid lg:grid-cols-2 gap-12 flex items-center">
          <div class="mt-12 lg:mt-4">
            <h1 class="text-5xl md:text-6xl xl:text-7xl font-bold tracking-tight mb-12">The best offer <br /><span class="text-blue-600">购买电报会员</span></h1>
            <p class="text-gray-600">
              为您的Telegram 频道或群组购买真实会员，合法且有质量保证，市场价格最低
            </p>

            <div class="py-12">
              <span class="  bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-2.5 rounded dark:bg-blue-200 dark:text-blue-800">购买TG会员</span>
              <span class="  bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-2.5 rounded dark:bg-blue-200 dark:text-blue-800">购买帖子浏览量</span>
              <span class="  bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-2.5 rounded dark:bg-blue-200 dark:text-blue-800">购买投票</span>

            </div>
          </div>
          <!-- 登录表单-->
          <x-login />
        </div>
      </div>

    </div>

<!-- 优势介绍结束 -->
<!-- Section: Design Block -->


<!-- Container for demo purpose -->
  </section>

<x-youshi/>
<x-howstart/>
<x-faq/>
  <x-footer/>
  <!-- Section: Design Block -->
<!-- /footer -->

</div>

</div>


</body>

</html>