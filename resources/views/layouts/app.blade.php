<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
        <style>
            .bg-gradient {
  background: linear-gradient(135deg, #ff9a9a, #0e9cc4) !important;
  padding: 3px;
}

.btn-shadow {
  box-shadow: 0px 100px 80px rgba(41, 72, 152, 0.05),
    0px 64.8148px 46.8519px rgba(41, 72, 152, 0.037963),
    0px 38.5185px 25.4815px rgba(41, 72, 152, 0.0303704),
    0px 20px 13px rgba(41, 72, 152, 0.025),
    0px 8.14815px 6.51852px rgba(41, 72, 152, 0.0196296),
    0px 1.85185px 3.14815px rgba(41, 72, 152, 0.012037);
}

.stories {
  scrollbar-width: none;
}

.views,
.follows,
.likes {
  background-position: right center;
  background-repeat: no-repeat;
  background-size: 60%;
}

@media screen and (min-width: 768px) and (max-width: 1024px) {
  .views,
  .follows,
  .likes {
    background-size: 85%;
    background-position: right center;
  }
}

.views {
  background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iODYiIGhlaWdodD0iNzUiIHZpZXdCb3g9IjAgMCA4NiA3NSIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik0xMzcuNDM0IC0yNS4xNTg3QzE0OS4zMTkgLTIxLjI1MTEgMTUzLjA2MSAtNC43MTMxNSAxNTMuMzk2IDcuODM5MzVDMTUzLjY5IDE4Ljg0NTYgMTQzLjUxOSAyNi42NzkyIDEzOS4wODkgMzYuNzgxM0MxMzUuNTQxIDQ0Ljg3MTggMTM1LjUxMSA1NC4wNDMyIDEzMC4wNzggNjEuMDEwOEMxMjMuNDU5IDY5LjQ5ODkgMTE1LjYxMiA3Ny43NjQzIDEwNS4xNzYgODAuMjcxM0M5My42Njc3IDgzLjAzNTkgODAuMzU5IDgyLjM3MTEgNzAuOTg3MyA3NS4yMDYxQzYxLjc3ODkgNjguMTY1OSA2Mi44NDQ0IDU0LjMyOTQgNTcuNjU5MSA0My45NDNDNTEuNTE2NyAzMS42MzkyIDM2Ljk5NTkgMjIuNjY3NyAzNy44ODYgOC45MDE2OEMzOC43OTk0IC01LjIyNDIgNDguNTAzMiAtMjAuOTE4NCA2Mi4xMDMzIC0yNC43ODc4Qzc2LjA4NjIgLTI4Ljc2NiA4Ny4wMzA0IC05LjEzNzg3IDEwMS41NDQgLTkuMjA5MzNDMTE0LjkzIC05LjI3NTI1IDEyNC43MzYgLTI5LjMzMzcgMTM3LjQzNCAtMjUuMTU4N1oiIGZpbGw9IiNGREJDNjQiLz4KPHBhdGggb3BhY2l0eT0iMC4xIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGNsaXAtcnVsZT0iZXZlbm9kZCIgZD0iTTEyNC40MzQgLTI1LjE1ODdDMTM2LjMxOSAtMjEuMjUxMSAxNDAuMDYxIC00LjcxMzE1IDE0MC4zOTYgNy44MzkzNUMxNDAuNjkgMTguODQ1NiAxMzAuNTE5IDI2LjY3OTIgMTI2LjA4OSAzNi43ODEzQzEyMi41NDEgNDQuODcxOCAxMjIuNTExIDU0LjA0MzIgMTE3LjA3OCA2MS4wMTA4QzExMC40NTkgNjkuNDk4OSAxMDIuNjEyIDc3Ljc2NDIgOTIuMTc2IDgwLjI3MTNDODAuNjY3NyA4My4wMzU5IDY3LjM1OSA4Mi4zNzExIDU3Ljk4NzMgNzUuMjA2MUM0OC43Nzg5IDY4LjE2NTkgNDkuODQ0MyA1NC4zMjk0IDQ0LjY1OTEgNDMuOTQzQzM4LjUxNjcgMzEuNjM5MiAyMy45OTU5IDIyLjY2NzcgMjQuODg2IDguOTAxNjlDMjUuNzk5NCAtNS4yMjQyIDM1LjUwMzIgLTIwLjkxODQgNDkuMTAzMyAtMjQuNzg3OEM2My4wODYyIC0yOC43NjYgNzQuMDMwNCAtOS4xMzc4NyA4OC41NDQgLTkuMjA5MzNDMTAxLjkzIC05LjI3NTI1IDExMS43MzYgLTI5LjMzMzcgMTI0LjQzNCAtMjUuMTU4N1oiIGZpbGw9IiNGREJDNjQiLz4KPC9zdmc+Cg==);
}

.follows {
  background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iODMiIGhlaWdodD0iNzUiIHZpZXdCb3g9IjAgMCA4MyA3NSIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik0yOC41Mzc0IDAuMjMxNTQ1QzI4LjQ3MDYgLTEyLjI3ODYgNDIuOTY1NiAtMjEuMDc2NCA1NC43NjI1IC0yNS4zNzg2QzY1LjEwNjMgLTI5LjE1MDkgNzUuNzYzMyAtMjEuOTkyNCA4Ni43NDkyIC0yMC45OTc5Qzk1LjU0NzUgLTIwLjIwMTUgMTA0LjI1NCAtMjMuMDg1IDExMi41ODYgLTIwLjE0NDVDMTIyLjczNiAtMTYuNTYyMiAxMzMuMDY1IC0xMS43NDQxIDEzOC43NTUgLTIuNjQzNTNDMTQ1LjAyOSA3LjM5MjA1IDE0OC42MjMgMjAuMjIzNiAxNDQuODAzIDMxLjM4NDlDMTQxLjA1IDQyLjM1MTggMTI3LjU5MSA0NS43MzMzIDExOS4zODggNTMuOTQ3M0MxMDkuNjcgNjMuNjc3NSAxMDUuNzcxIDgwLjI5NSA5Mi40MzQ3IDgzLjgyMDVDNzguNzQ5NCA4Ny40MzgxIDYwLjc4NjYgODMuMjE3OCA1Mi44MDA1IDcxLjU0OTJDNDQuNTg5NiA1OS41NTIxIDU5LjcyODggNDIuOTQzNiA1NS4wNTQxIDI5LjIwMzNDNTAuNzQyNiAxNi41MyAyOC42MDg4IDEzLjU5ODEgMjguNTM3NCAwLjIzMTU0NVoiIGZpbGw9IiNGOTg5NkIiLz4KPHBhdGggb3BhY2l0eT0iMC4yIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGNsaXAtcnVsZT0iZXZlbm9kZCIgZD0iTTE4LjUzNzQgMy4yMzE1NUMxOC40NzA2IC05LjI3ODYgMzIuOTY1NiAtMTguMDc2NCA0NC43NjI1IC0yMi4zNzg2QzU1LjEwNjMgLTI2LjE1MDkgNjUuNzYzMyAtMTguOTkyNCA3Ni43NDkyIC0xNy45OTc5Qzg1LjU0NzUgLTE3LjIwMTUgOTQuMjUzOCAtMjAuMDg1IDEwMi41ODYgLTE3LjE0NDVDMTEyLjczNiAtMTMuNTYyMiAxMjMuMDY1IC04Ljc0NDE0IDEyOC43NTUgMC4zNTY0NjZDMTM1LjAyOSAxMC4zOTIgMTM4LjYyMyAyMy4yMjM2IDEzNC44MDMgMzQuMzg0OUMxMzEuMDUgNDUuMzUxOCAxMTcuNTkxIDQ4LjczMzMgMTA5LjM4OCA1Ni45NDczQzk5LjY2OTggNjYuNjc3NSA5NS43NzE0IDgzLjI5NSA4Mi40MzQ3IDg2LjgyMDVDNjguNzQ5NCA5MC40MzgxIDUwLjc4NjYgODYuMjE3OCA0Mi44MDA1IDc0LjU0OTJDMzQuNTg5NiA2Mi41NTIxIDQ5LjcyODggNDUuOTQzNiA0NS4wNTQxIDMyLjIwMzNDNDAuNzQyNiAxOS41MyAxOC42MDg4IDE2LjU5ODEgMTguNTM3NCAzLjIzMTU1WiIgZmlsbD0iI0Y5ODk2QiIvPgo8L3N2Zz4K);
}

.likes {
  background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAwIiBoZWlnaHQ9Ijc1IiB2aWV3Qm94PSIwIDAgMTAwIDc1IiBmaWxsPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8cGF0aCBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGNsaXAtcnVsZT0iZXZlbm9kZCIgZD0iTTg0LjE0MjIgLTIxLjY0MzJDMTA1LjU0NCAtMjcuODIzOCAxMjIuMTQ2IC0zLjAxMTg1IDEzOS40ODIgMTAuOTI2OUMxNTEuNzcxIDIwLjgwNzggMTYzLjYyOCAzMS4wNDE5IDE2OC4zNjMgNDYuMDczMUMxNzMuMDQ1IDYwLjkzNjUgMTcwLjUxMSA3Ni40NDI2IDE2NC42NzUgOTAuOTA2M0MxNTguMTM2IDEwNy4xMTIgMTQ5LjIxNyAxMjIuMjU0IDEzNC4wODQgMTMxLjAzM0MxMTQuNzk3IDE0Mi4yMjEgOTEuNTI2MyAxNTQuMzkyIDcxLjI4NjUgMTQ1LjA4MkM1MC44MTI1IDEzNS42NjYgNDMuNzE4MyAxMTAuMiA0MC4zODM5IDg3LjkzNjNDMzcuNTg2OSA2OS4yNjA5IDQ3Ljg0NTkgNTIuOTE2NSA1NC44NTQ1IDM1LjM2NTVDNjMuMDg5MyAxNC43NDQgNjIuNzgzMiAtMTUuNDc1MSA4NC4xNDIyIC0yMS42NDMyWiIgZmlsbD0iIzg0RThGNCIvPgo8cGF0aCBvcGFjaXR5PSIwLjIiIGZpbGwtcnVsZT0iZXZlbm9kZCIgY2xpcC1ydWxlPSJldmVub2RkIiBkPSJNNzQuMTQyMiAtMjEuNjQzMkM5NS41NDQ1IC0yNy44MjM4IDExMi4xNDYgLTMuMDExODUgMTI5LjQ4MiAxMC45MjY5QzE0MS43NzEgMjAuODA3OCAxNTMuNjI4IDMxLjA0MTkgMTU4LjM2MyA0Ni4wNzMxQzE2My4wNDUgNjAuOTM2NSAxNjAuNTExIDc2LjQ0MjYgMTU0LjY3NSA5MC45MDYzQzE0OC4xMzYgMTA3LjExMiAxMzkuMjE3IDEyMi4yNTQgMTI0LjA4NCAxMzEuMDMzQzEwNC43OTcgMTQyLjIyMSA4MS41MjYzIDE1NC4zOTIgNjEuMjg2NSAxNDUuMDgyQzQwLjgxMjUgMTM1LjY2NiAzMy43MTgzIDExMC4yIDMwLjM4MzkgODcuOTM2M0MyNy41ODY5IDY5LjI2MDkgMzcuODQ1OSA1Mi45MTY1IDQ0Ljg1NDUgMzUuMzY1NUM1My4wODkzIDE0Ljc0NCA1Mi43ODMyIC0xNS40NzUxIDc0LjE0MjIgLTIxLjY0MzJaIiBmaWxsPSIjODRFOEY0Ii8+Cjwvc3ZnPgo=);
}

        </style>
    <script src="https://cdn.jsdelivr.net/npm/tinymce@5.10.7/tinymce.min.js"></script>
    <script>
      tinymce.init({
          selector: '#editor',
          plugins: 'lists link image table code',
          toolbar: 'styleselect | undo redo | bold italic underline | bullist numlist | link image | code',
          menubar: false,
          setup: function (editor) {
              editor.on('input', function () {
                  const charCount = editor.getContent({ format: 'text' }).length;
                  document.getElementById('char-count').innerText = charCount;
              });
          }
      });
      </script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                
    <div class="flex flex-row">
        <nav class="md:w-1/3 left-side px-8 py-9 flex-col justify-between hidden md:flex md:py-8 md:px-7 xl:w-2/12">
          <div>
            <ul>
                <li class="mb-10">
                    <a href="{{ route('dashboard') }}" 
                       class="flex items-center {{ request()->routeIs('dashboard') ? 'text-black font-bold' : 'text-zinc-500' }}">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.07874 16.1354H14.8937" stroke="black" strokeWidth="1.5" strokeLinecap="round" strokeLinejoin="round" />
                            <path fillRule="evenodd" clipRule="evenodd" d="M2.4 13.713C2.4 8.082 3.014 8.475 6.319 5.41C7.765 4.246 10.015 2 11.958 2C13.9 2 16.195 4.235 17.654 5.41C20.959 8.475 21.572 8.082 21.572 13.713C21.572 22 19.613 22 11.986 22C4.359 22 2.4 22 2.4 13.713Z" stroke="black" strokeWidth="1.5" strokeLinecap="round" strokeLinejoin="round" />
                        </svg>
                        <span class="text-base font-semibold ml-3">Dashboard</span>
                    </a>
                </li>
                
                <li class="mb-10">
                    <a href="{{ route('products.index') }}" 
                       class="flex items-center {{ request()->routeIs('products.index') ? 'text-black font-bold' : 'text-zinc-500' }}">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.4">
                                <path fillRule="evenodd" clipRule="evenodd" d="M2.74982 12.7756C2.74982 5.8196 5.06882 3.5016 12.0238 3.5016C18.9798 3.5016 21.2988 5.8196 21.2988 12.7756C21.2988 19.7316 18.9798 22.0496 12.0238 22.0496C5.06882 22.0496 2.74982 19.7316 2.74982 12.7756Z" stroke="black" strokeWidth="1.5" strokeLinecap="round" strokeLinejoin="round" />
                            </g>
                        </svg>
                        <span class="text-base font-semibold ml-3">Products</span>
                    </a>
                </li>
        
                <li class="mb-16">
                    <a href="{{ route('services.index') }}" 
                       class="flex items-center {{ request()->routeIs('services.index') ? 'text-black font-bold' : 'text-zinc-500' }}">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.4">
                                <path fillRule="evenodd" clipRule="evenodd" d="M12 9.5C13.3809 9.5 14.5 10.6191 14.5 12C14.5 13.3809 13.3809 14.5 12 14.5C10.6191 14.5 9.5 13.3809 9.5 12C9.5 10.6191 10.6191 9.5 12 9.5Z" stroke="black" strokeWidth="1.5" strokeLinecap="round" strokeLinejoin="round" />
                            </g>
                        </svg>
                        <span class="text-base font-semibold ml-3">Services</span>
                    </a>
                </li>
        
                <li class="mb-10">
                    <a href="{{ route('purchase.index') }}" 
                       class="flex items-center {{ request()->routeIs('purchase.index') ? 'text-black font-bold' : 'text-zinc-500' }}">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.4">
                                <path fillRule="evenodd" clipRule="evenodd" d="M2.74982 12.7756C2.74982 5.8196 5.06882 3.5016 12.0238 3.5016C18.9798 3.5016 21.2988 5.8196 21.2988 12.7756C21.2988 19.7316 18.9798 22.0496 12.0238 22.0496C5.06882 22.0496 2.74982 19.7316 2.74982 12.7756Z" stroke="black" strokeWidth="1.5" strokeLinecap="round" strokeLinejoin="round" />
                            </g>
                        </svg>
                        <span class="text-base font-semibold ml-3">Purchase</span>
                    </a>
                </li>
            </ul>
        </div>
        
        </nav>
                {{ $slot }}
            </div>
            </main>
        </div>
    </body>
</html>
