<footer class="bg-gray-800 py-20 mt-20">
    <div class="sm:grid grid-cols-2 w-3/5 pb-10 m-auto border-b-2 border-gray-700">
        <div>
            <h3 class="text-l sm:font-bold text-gray-400">
                Pages
            </h3>

            <ul class="py-1 sm:text-s pt-1 text-gray-400">
                <li class="pb-1">
                    <a class="no-underline hover:underline text-gray-100" href="/">
                        {{ $home }}
                    </a>
                </li>
                <li class="pb-1">
                    <a class="no-underline hover:underline text-gray-100" href="/blog">
                        {{ $blog }}
                    </a>
                </li>
                <li class="pb-1">
                    <a class="no-underline hover:underline text-gray-100" href="/login">
                        {{ $login }}
                    </a>
                </li>
                <li class="pb-1">
                    <a class="no-underline hover:underline text-gray-100" href="/register">
                        {{ $register }}
                    </a>
                </li>
            </ul>
        </div>

        <div>
            <h3 class="text-l sm:font-bold text-gray-400">
                Find Me
            </h3>
            <ul class="py-1 sm:text-s pt-1 text-gray-400">

                <li class="pb-1">
                    <a class="no-underline hover:underline text-gray-100" href="/contacts">
                        {{ $contacts}}
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <p class="w-25 w-4/5 pb-3 m-auto text-xs text-gray-100 pt-6">
        Copyright 2021-2022 MySportsBlog. All Rights Reserved.
    </p>
</footer>