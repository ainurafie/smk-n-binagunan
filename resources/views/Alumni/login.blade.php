<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Open+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />
    <title>Login</title>
    <link rel="icon" href="../../assets/image/logo.png">
    @vite('resources/css/app.css')
</head>

<body class="bg-[#F7F7F7]">
    <livewire:navbar.navbar2 />
    <livewire:navbar.navbar />

    <div class="lg:mt-40 mt-40 md:px-0 px-5">
        <h1 class="text-[32px] font-semibold font-open-sans text-center mb-[30px] pt-[50px]">Alumni</h1>
        <h1 class="md:text-2xl text-xl font-open-sans text-center md:px-[109px] mb-[50px]">Untuk alumni yang ingin
            mengakses data
            silahkan login menggunakan username dan password yang sudah dibagikan pada waktu kelulusan</h1>
        <h1 class="text-[32px] font-bold font-open-sans text-center mb-10">LOGIN</h1>
        <div class="md:px-60">
            <input type="email" id="email"
                class="bg-gray-50 border border-gray-300 text-[#616161] text-xl rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-5 placeholder-[#616161] mb-[53px]"
                placeholder="Email Anda" required>
            <div class="relative">
                <input type="password" id="password" name="password"
                    class="bg-gray-50 border border-gray-300 text-[#616161] text-xl rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-5 placeholder-[#616161] mb-[53px]"
                    required>
                <div class="flex absolute top-5 right-3 items-center pr-3 text-gray-600 cursor-pointer">
                    <iconify-icon id="togglernew" icon="bxs:show" width="30" height="30"></iconify-icon>
                </div>
            </div>

            <div class="flex justify-center mb-8">
                <a href="/alumni/list-peserta-didik"
                    class="md:px-24 md:py-2 px-10 py-2 text-white font-bold bg-[#0D47A1] rounded-xl text-2xl md:text-2xl">Login</a>
            </div>
            <h1 class="md:text-xl text-lg text-[#787878] text-center font-open-sans mb-20 md:mb-40">Jika lupa username
                dan juga password
                bisa
                menghubungi bagian administrasi sekolah</h1>
        </div>
    </div>
    <livewire:footer.footer />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.5/iconify-icon.min.js"></script>

</body>

<script>
    const myButton = document.getElementById("myButton");

    myButton.addEventListener("click", function() {
        alert("Anda telah mengeklik tombol!");
        window.location.href = "https://www.example.com";
    });
</script>
<script>
    var newpassword = document.getElementById('password');
    var togglernew = document.getElementById('togglernew');
    showHidePasswordNew = () => {
        if (newpassword.type == 'password') {
            newpassword.setAttribute('type', 'text');
            togglernew.removeAttribute('icon')
            togglernew.setAttribute('icon', 'bxs:hide')
        } else {
            togglernew.removeAttribute('icon')
            togglernew.setAttribute('icon', 'bxs:show')
            newpassword.setAttribute('type', 'password');
        }
    };

    togglernew.addEventListener('click', showHidePasswordNew);
</script>

</html>
