<head>
    <link href="{{('css/app.css') }}" rel="stylesheet">
</head>

<x-app-layout>
<x-slot name="header">
  <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      ホーム
  </h2>
</x-slot>

<!-- hero - start -->
<div class="bg-white pb-6 sm:pb-8 lg:pb-12">
  <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
    <section class="min-h-96 relative flex flex-1 shrink-0 items-center justify-center overflow-hidden rounded-lg bg-gray-100 py-16 shadow-lg md:py-20 xl:py-48">
      <!-- image - start -->
      <img src="{{ asset('images/dashbourd用.jpg') }}" loading="lazy" alt="Photo by Fakurian Design" class="absolute inset-0 h-full w-full object-cover object-center" />
      <!-- image - end -->

      <!-- text start -->
      <div class="relative flex flex-col items-center p-4 sm:max-w-xl">
        <p class="mb-4 text-center text-lg text-black sm:text-xl md:mb-8">～富士山を知ろう、撮ろう、楽しもう！～</p>
        <h1 class="mb-8 text-center text-4xl font-bold text-white sm:text-5xl md:mb-12 md:text-6xl">Enjoy Fuji🗻</h1>

        <div class="flex w-full flex-col gap-2.5 sm:flex-row sm:justify-center">
          <a href="/rules" class="inline-block rounded-lg bg-indigo-500 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-indigo-300 transition duration-100 hover:bg-indigo-600 focus-visible:ring active:bg-indigo-700 md:text-base">初めて登る人へ</a>
        </div>
      </div>
      <!-- text end -->
    </section>
  </div>
</div>
<!-- hero - end -->

<!-- gallery - start -->
<div class="bg-white py-6 sm:py-8 lg:py-12">
  <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
    <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-8 lg:text-3xl xl:mb-12">いろいろなページ</h2>

    <div class="mb-4 grid grid-cols-2 gap-4 sm:grid-cols-3 md:mb-8 md:grid-cols-4 md:gap-6 xl:gap-8">
      <!-- image - start -->
      <a href="/rules" class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80">
        <img src="{{ asset('images/初めての人.jpg') }}" loading="lazy" alt="Photo by Minh Pham" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

        <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50"></div>

        <span class="relative mb-3 ml-4 inline-block text-sm text-white md:ml-5 md:text-lg">初めて登る人へ</span>
      </a>
      <!-- image - end -->

      <!-- image - start -->
      <a href="/courses" class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80">
        <img src="{{ asset('images/コース.jpg') }}" loading="lazy" alt="Photo by Magicle" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

        <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50"></div>

        <span class="relative mb-3 ml-4 inline-block text-sm text-white md:ml-5 md:text-lg">登山ルート</span>
      </a>
      <!-- image - end -->

      <!-- image - start -->
      <a href="/huts" class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80">
        <img src="{{ asset('images/山小屋.jpg') }}" loading="lazy" alt="Photo by Martin Sanchez" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

        <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50"></div>

        <span class="relative mb-3 ml-4 inline-block text-sm text-white md:ml-5 md:text-lg">山小屋情報</span>
      </a>
      <!-- image - end -->

      <!-- image - start -->
      <a href="/weathers" class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80">
        <img src="{{ asset('images/天気.png') }}" loading="lazy" alt="Photo by Lorenzo Herrera" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

        <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50"></div>

        <span class="relative mb-3 ml-4 inline-block text-sm text-white md:ml-5 md:text-lg">天気予報</span>
      </a>
      <!-- image - end -->
      
      <!-- image - start -->
      <a href="/posts" class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80">
        <img src="{{ asset('images/富士山投稿.jpg') }}" loading="lazy" alt="Photo by Lorenzo Herrera" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

        <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50"></div>

        <span class="relative mb-3 ml-4 inline-block text-sm text-white md:ml-5 md:text-lg">富士山投稿</span>
      </a>
      <!-- image - end -->
      
      <!-- image - start -->
      <a href="/questions" class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80">
        <img src="{{ asset('images/Q&A.jpg') }}" loading="lazy" alt="Photo by Lorenzo Herrera" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

        <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50"></div>

        <span class="relative mb-3 ml-4 inline-block text-sm text-white md:ml-5 md:text-lg">Q&A</span>
      </a>
      <!-- image - end -->
    </div>
  </div>
</div>
<!-- gallery - end -->

<!-- stats - start -->
<div class="bg-white py-6 sm:py-8 lg:py-12">
  <div class="mx-auto max-w-screen-lg px-4 md:px-8">
    <div class="mb-8 md:mb-12">
      <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl">富士山とは</h2>

      <p class="mx-auto max-w-screen-md text-center text-gray-500 md:text-lg">富士山は、とても美しいものではありますが、同時に危険性も伴います。<br>それを十分に理解したうえで、楽しみましょう！</p>
    </div>
  </div>
</div>
<!-- stats - end -->
    <div class="flex items-start justify-end gap-8 sm:items-center text-right">
        <a href="#" class="inline-block rounded-lg border bg-white px-4 py-2 text-center text-sm font-semibold text-gray-500 outline-none ring-indigo-300 transition duration-100 hover:bg-gray-100 focus-visible:ring active:bg-gray-200 md:px-8 md:py-3 md:text-base">トップへ戻る</a>
    </div>
</x-app-layout>
