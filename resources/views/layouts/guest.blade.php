<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from coderthemes.com/yum/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Sep 2024 11:32:55 GMT -->
<head>
    <meta charset="utf-8" />
    <title>Yum - Multipurpose Food Tailwind CSS Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description" />
    <meta content="coderthemes" name="author" />

    <!-- Theme favicon -->
    <link rel="shortcut icon" href="/assets/favicon-c43f27ef.ico">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!--  Head js -->
      <script type="module" crossorigin src="/assets/home-c1b793e9.js"></script>
      <link rel="modulepreload" crossorigin href="/assets/theme-b118ffc1.js">
      <link rel="modulepreload" crossorigin href="/assets/free-mode-d251b1d1.js">
      <link rel="modulepreload" crossorigin href="/assets/navigation-f8e75545.js">
      <link rel="modulepreload" crossorigin href="/assets/thumbs-a96dec08.js">
      <link rel="stylesheet" href="/assets/theme-c9540983.css">
    </head>

<body>
    <!-- Preloader -->
    <div id="preloader" class="fixed inset-0 z-70 bg-default-50 transition-all visible opacity-100 h-screen w-screen flex items-center justify-center">
        <div class="animate-spin inline-block w-10 h-10 border-4 border-t-transparent border-primary rounded-full" role="status" aria-label="loading">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <!-- Offer/Help Menu -->
    <div class="h-8 lg:flex items-center hidden bg-primary-950 text-white z-20">
        <div class="container">
            <nav class="grid lg:grid-cols-3 items-center gap-4">
                <!-- Language Dropdown -->
                <div class="flex relative">
                    <div class="hs-dropdown relative inline-flex [--trigger:hover] [--placement:bottom]">
                        <a class="hs-dropdown-toggle after:absolute hover:after:-bottom-10 after:inset-0 relative flex items-center text-base" href="javascript:void(0)">
                            <img alt="Image" class="h-3.5 me-3" src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMpaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjAtYzA2MCA2MS4xMzQ3NzcsIDIwMTAvMDIvMTItMTc6MzI6MDAgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDUzUgV2luZG93cyIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo5NTM4RDUxQjYxM0IxMUU3ODM5NTg5Qjc3NkUwNEZFMSIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo5NTM4RDUxQzYxM0IxMUU3ODM5NTg5Qjc3NkUwNEZFMSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjk1MzhENTE5NjEzQjExRTc4Mzk1ODlCNzc2RTA0RkUxIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjk1MzhENTFBNjEzQjExRTc4Mzk1ODlCNzc2RTA0RkUxIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+/+4ADkFkb2JlAGTAAAAAAf/bAIQABgQEBAUEBgUFBgkGBQYJCwgGBggLDAoKCwoKDBAMDAwMDAwQDA4PEA8ODBMTFBQTExwbGxscHx8fHx8fHx8fHwEHBwcNDA0YEBAYGhURFRofHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8f/8AAEQgAKgBAAwERAAIRAQMRAf/EAJkAAQABBQEAAAAAAAAAAAAAAAAHAgMEBQYBAQEAAgMBAQAAAAAAAAAAAAAAAgYBBAUDBxAAAAQBBwkHBAMBAAAAAAAAAQIDBAAREhMFBhYHMaHRkpPTFVVWIUGRIjIzFFFhQtKCIyVFEQAAAgMQAgIBBQAAAAAAAAAAAfACAxEhMVGBoRJSghNTBBRUBRVBcZHRMmHhIkJD/9oADAMBAAIRAxEAPwDlhqtFarm7o4qNFlE3Cx3LoRonRkzgAJthKQRE/b2zhyxa6ThuQwQePY1hmjZ9nxYyXx3cwFDJ8G/6QACFJSiFHMmTs0RvDo+PfiEHBjN6jaGamEywqz/iDxFKcLVr8gRA5HUpJwGCT8YkbQ3fl7yfoBubIVNU94KpSrBVdk0cJuqesREKBaiE4EM3ESAM3ygAy98c7lHFmC1I3nvZDp8O2as8wqbJWku+9G8JNuvhv1Ep4l/SKpdMqwufZcjgFP8AYXXw36iU8S/pC6ZVg7LkcAp/sLr4b9RKeJf0hdMqwdlyOAU/2PS2Zw5KYDFtGoBgGUBASgICH8IXTKsMHyPIn/gSSiHmhQQqZFU4fFBw1dkKu7AF0nAgoUJjYkwaFQMk+XL3hF6WfWjfKDx7jHzobIW3+gNX/GXpQcnPwmcXiRQ+JLSfMo5BT75mbvjzdedd8Q/1hiAWG5iHTSdgoRQjYtXFO/RSAjVsM4fK8b0f95gk9XfJ3xI4o6T3k/R+AGdZo9UNLRVO8rZis4q5Ur0xjJmCgX8yhSnbJf1URSmylljR5JZUmC1J8v4vefEI6fDs2y+YVJidFd9w5PRiR7w4V8iceAb6KreMaqfIueg5TGVSyF4cK+ROPAN9C8Y1U+Q0HKYyqWQvDhXyJx4BvoXjGqnyGg5TGVSyF4cK+ROPAN9C8Y1U+Q0HKYyqWRGhLF2+aNSt2lnHiLgyazd8vNFUqyahgEAKUQEpJACScUe2LrqGRm6axfoPndAxfGylsxcCldR7walFctXeeeCgpUc75E2ky+aTJEb9m5+ZUo/2CgcQoTsviKBSrK2eeKVi2BuWr3YJzQRK2ERApkwLMVl7O02eMm3Y1icfdlCgsNvZCobb1XaJhWwWXcA6blcC7UVA1GsdedIYCSABJANJIWNPkMwrcmSp0jecIb3HZdRdsRNFqCj7piSr0W96YLqH0xXL1pVFk63I7icgvRb3pguofTC9aVQ63I7icgvRb3pguofTC9aVQ63I7icgvRb3pguofTC9aVQ63I7ichXwTFnnTXNuIUG0ZJII6zisJdLYcExZ501zbiFBtGSSBrOKwl0thwTFnnTXNuIUG0ZJIGs4rCXS2HBMWedNc24hQbRkkgazisJdLYcExZ501zbiFBtGSSBrOKwl0thwTFnnTXNuIUG0ZJIGs4rCXS2HBMWedNc24hQbRkkgazisJdLYcExZ501zbiFBtGSSBrOKwl0tjT3Xsd1aO0JpjzulKw6HZZzbTGF17HdWjtCaYXSlYOyzm2mMLr2O6tHaE0wulKwdlnNtMYXXsd1aO0JphdKVg7LObaYwuvY7q0doTTC6UrB2Wc20xhdex3Vo7QmmF0pWDss5tpjC69jurR2hNMLpSsHZZzbTGF17HdWjtCaYXSlYOyzm2mMcE499T2/Ub2/Rl/H7fSNMxaVPxKGWEW9WMCQasADVgAasADVgAasAFxv76ft+ovuejL+X2+sZIRX/ABOGSEf/2Q==">
                            <span class="font-medium text-xs">English (USA)</span>
                        </a>

                        <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 min-w-[140px] transition-[opacity,margin] mt-4 opacity-0 hidden z-50 bg-white shadow-[rgba(17,_17,_26,_0.1)_0px_0px_16px] rounded-lg border border-default-100 p-1.5 dark:bg-default-50">
                            <ul class="flex flex-col gap-1">
                                <li>
                                    <a class="flex items-center gap-2 font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-100 rounded" href="javascript:void(0)"><img alt="flag" class="h-4" src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMpaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjAtYzA2MCA2MS4xMzQ3NzcsIDIwMTAvMDIvMTItMTc6MzI6MDAgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDUzUgV2luZG93cyIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo5NTM4RDUxQjYxM0IxMUU3ODM5NTg5Qjc3NkUwNEZFMSIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo5NTM4RDUxQzYxM0IxMUU3ODM5NTg5Qjc3NkUwNEZFMSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjk1MzhENTE5NjEzQjExRTc4Mzk1ODlCNzc2RTA0RkUxIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjk1MzhENTFBNjEzQjExRTc4Mzk1ODlCNzc2RTA0RkUxIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+/+4ADkFkb2JlAGTAAAAAAf/bAIQABgQEBAUEBgUFBgkGBQYJCwgGBggLDAoKCwoKDBAMDAwMDAwQDA4PEA8ODBMTFBQTExwbGxscHx8fHx8fHx8fHwEHBwcNDA0YEBAYGhURFRofHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8f/8AAEQgAKgBAAwERAAIRAQMRAf/EAJkAAQABBQEAAAAAAAAAAAAAAAAHAgMEBQYBAQEAAgMBAQAAAAAAAAAAAAAAAgYBBAUDBxAAAAQBBwkHBAMBAAAAAAAAAQIDBAAREhMFBhYHMaHRkpPTFVVWIUGRIjIzFFFhQtKCIyVFEQAAAgMQAgIBBQAAAAAAAAAAAfACAxEhMVGBoRJSghNTBBRUBRVBcZHRMmHhIkJD/9oADAMBAAIRAxEAPwDlhqtFarm7o4qNFlE3Cx3LoRonRkzgAJthKQRE/b2zhyxa6ThuQwQePY1hmjZ9nxYyXx3cwFDJ8G/6QACFJSiFHMmTs0RvDo+PfiEHBjN6jaGamEywqz/iDxFKcLVr8gRA5HUpJwGCT8YkbQ3fl7yfoBubIVNU94KpSrBVdk0cJuqesREKBaiE4EM3ESAM3ygAy98c7lHFmC1I3nvZDp8O2as8wqbJWku+9G8JNuvhv1Ep4l/SKpdMqwufZcjgFP8AYXXw36iU8S/pC6ZVg7LkcAp/sLr4b9RKeJf0hdMqwdlyOAU/2PS2Zw5KYDFtGoBgGUBASgICH8IXTKsMHyPIn/gSSiHmhQQqZFU4fFBw1dkKu7AF0nAgoUJjYkwaFQMk+XL3hF6WfWjfKDx7jHzobIW3+gNX/GXpQcnPwmcXiRQ+JLSfMo5BT75mbvjzdedd8Q/1hiAWG5iHTSdgoRQjYtXFO/RSAjVsM4fK8b0f95gk9XfJ3xI4o6T3k/R+AGdZo9UNLRVO8rZis4q5Ur0xjJmCgX8yhSnbJf1URSmylljR5JZUmC1J8v4vefEI6fDs2y+YVJidFd9w5PRiR7w4V8iceAb6KreMaqfIueg5TGVSyF4cK+ROPAN9C8Y1U+Q0HKYyqWQvDhXyJx4BvoXjGqnyGg5TGVSyF4cK+ROPAN9C8Y1U+Q0HKYyqWRGhLF2+aNSt2lnHiLgyazd8vNFUqyahgEAKUQEpJACScUe2LrqGRm6axfoPndAxfGylsxcCldR7walFctXeeeCgpUc75E2ky+aTJEb9m5+ZUo/2CgcQoTsviKBSrK2eeKVi2BuWr3YJzQRK2ERApkwLMVl7O02eMm3Y1icfdlCgsNvZCobb1XaJhWwWXcA6blcC7UVA1GsdedIYCSABJANJIWNPkMwrcmSp0jecIb3HZdRdsRNFqCj7piSr0W96YLqH0xXL1pVFk63I7icgvRb3pguofTC9aVQ63I7icgvRb3pguofTC9aVQ63I7icgvRb3pguofTC9aVQ63I7ichXwTFnnTXNuIUG0ZJII6zisJdLYcExZ501zbiFBtGSSBrOKwl0thwTFnnTXNuIUG0ZJIGs4rCXS2HBMWedNc24hQbRkkgazisJdLYcExZ501zbiFBtGSSBrOKwl0thwTFnnTXNuIUG0ZJIGs4rCXS2HBMWedNc24hQbRkkgazisJdLYcExZ501zbiFBtGSSBrOKwl0tjT3Xsd1aO0JpjzulKw6HZZzbTGF17HdWjtCaYXSlYOyzm2mMLr2O6tHaE0wulKwdlnNtMYXXsd1aO0JphdKVg7LObaYwuvY7q0doTTC6UrB2Wc20xhdex3Vo7QmmF0pWDss5tpjC69jurR2hNMLpSsHZZzbTGF17HdWjtCaYXSlYOyzm2mMcE499T2/Ub2/Rl/H7fSNMxaVPxKGWEW9WMCQasADVgAasADVgAasAFxv76ft+ovuejL+X2+sZIRX/ABOGSEf/2Q==">
                                        English</a>
                                </li>
                                <li>
                                    <a class="flex items-center gap-2 font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-100 rounded" href="javascript:void(0)"><img alt="flag" class="h-4" src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMpaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjAtYzA2MCA2MS4xMzQ3NzcsIDIwMTAvMDIvMTItMTc6MzI6MDAgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDUzUgV2luZG93cyIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDoxMEY3OTk0MDYxM0MxMUU3ODQ3Rjk5RTY5NjQzOEY2MyIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDoxMEY3OTk0MTYxM0MxMUU3ODQ3Rjk5RTY5NjQzOEY2MyI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjEwRjc5OTNFNjEzQzExRTc4NDdGOTlFNjk2NDM4RjYzIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjEwRjc5OTNGNjEzQzExRTc4NDdGOTlFNjk2NDM4RjYzIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+/+4ADkFkb2JlAGTAAAAAAf/bAIQABgQEBAUEBgUFBgkGBQYJCwgGBggLDAoKCwoKDBAMDAwMDAwQDA4PEA8ODBMTFBQTExwbGxscHx8fHx8fHx8fHwEHBwcNDA0YEBAYGhURFRofHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8f/8AAEQgAKgBAAwERAAIRAQMRAf/EAIAAAAMBAAMAAAAAAAAAAAAAAAAGBwgBAgMBAAIDAQEBAAAAAAAAAAAAAAAHAwUGBAECEAABAwAIBAMJAAAAAAAAAAAAAQIDMbEyM3Q2BwgRUbM0kgREIWFxEkJicwYWEQEAAAMJAQEAAAAAAAAAAAAAATGBwTKCAzMENAUGEQL/2gAMAwEAAhEDEQA/AEB8sj3ue96ue5VVzlVVVVWlVU2PxyOvzO5qAU3b2qr+9zcV9BN1Iyu7PSqky5tIGfTgAjWrKr/VJ7fTR1uKzd3zE8xxcUbCXxXmcrRfHLXva5HNcrXNXiiovBUVAeRhCKcjOI8AFO2957mwE3UjK7tNKqTLm0gZ9OACM6s5rTDR1uKzd3zE8xxcUbCYcrRAAnQziOABTtvee5sBN1Iyu7TSqky5tIGfTgAjOrOa0w0dbis3d8xPMcXFGwmHK0QAJ0M4jgAU7b3nubATdSMru00qpMubSBn04AIzqzmtMNHW4rN3fMTzHFxRsJhytEACdDOI4AFO2957mwE3UjK7tNKqTLm0gZ9OACM6s5rTDR1uKzd3zE8xxcUbCYcrRAAQ/N91Nc23XV3Stj7eQzISI55eA9Cmbfc9S2exmo/JGV3Z6VUmXNo8oE4AI1qxmpKO2jp+Lis3d8w/McXFGwmeE5Whenl7+O7tNvLFP1e7mewfP7uxnSb/2Q=="> French</a>
                                </li>
                                <li>
                                    <a class="flex items-center gap-2 font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-100 rounded" href="javascript:void(0)"><img alt="flag" class="h-4" src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMpaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjAtYzA2MCA2MS4xMzQ3NzcsIDIwMTAvMDIvMTItMTc6MzI6MDAgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDUzUgV2luZG93cyIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpENEQyQjUxRTYxM0IxMUU3QThGRDlFNzgyMDM4RjBCQyIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDpENEQyQjUxRjYxM0IxMUU3QThGRDlFNzgyMDM4RjBCQyI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOkQ0RDJCNTFDNjEzQjExRTdBOEZEOUU3ODIwMzhGMEJDIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOkQ0RDJCNTFENjEzQjExRTdBOEZEOUU3ODIwMzhGMEJDIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+/+4ADkFkb2JlAGTAAAAAAf/bAIQABgQEBAUEBgUFBgkGBQYJCwgGBggLDAoKCwoKDBAMDAwMDAwQDA4PEA8ODBMTFBQTExwbGxscHx8fHx8fHx8fHwEHBwcNDA0YEBAYGhURFRofHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8f/8AAEQgAKgBAAwERAAIRAQMRAf/EAHkAAQEBAAMAAAAAAAAAAAAAAAABBgIFBwEBAAIDAQAAAAAAAAAAAAAAAAEFAgQGBxAAAQIBDQADAQAAAAAAAAAAAAECAzFRkRKi0qPjVAVVFhchQYEyEQEAAAMHBQEAAAAAAAAAAAAA4WKiUaGx0QJSFgEDBBQVMf/aAAwDAQACEQMRAD8A82fFive573uc9yqrnKqqqqvyqqqmwhKzp1JCs6dQFZ06gKzp1AVnTqArOnUCsixWPa9j3Ne1UVrkVUVFT5RUVCB2XWd701uHeNb3O1biuePebsq05nWd701uHeHudq3E495uyrTmdZ3vTW4d4e52rcTj3m7KtOZ1ne9Nbh3h7natxOPebsq05nWd701uHeHudq3E495uyrTmdZ3vTW4d4e52rcTj3m7KtOZ1ne9Nbh3h7natxOPebsq05nWd701uHeHudq3E495uyrTm3RRvTgAAAAAAADd+XpyeBmFJ9iS+Dm+QyVQPL05PAzB9iS+ByGSqB5enJ4GYPsSXwOQyVQPL05PAzB9iS+ByGSqB5enJ4GYPsSXwOQyVQPL05PAzB9iS+ByGSqB5enJ4GYPsSXwOQyVQPL05PAzB9iS+ByGSqDdlI5sAAAAAAAA5O/pZJfqT8M9f71/EdEoMQoAUAKAFACgCt/pJJfuT9MtH70/Dq//Z">
                                        German</a>
                                </li>
                                <li>
                                    <a class="flex items-center gap-2 font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-100 rounded" href="javascript:void(0)"><img alt="flag" class="h-4" src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMpaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjAtYzA2MCA2MS4xMzQ3NzcsIDIwMTAvMDIvMTItMTc6MzI6MDAgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDUzUgV2luZG93cyIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDoyODQ3Mjc2MTYxM0MxMUU3ODJENDgwMDE3MDIxNjRGOCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDoyODQ3Mjc2MjYxM0MxMUU3ODJENDgwMDE3MDIxNjRGOCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjI4NDcyNzVGNjEzQzExRTc4MkQ0ODAwMTcwMjE2NEY4IiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjI4NDcyNzYwNjEzQzExRTc4MkQ0ODAwMTcwMjE2NEY4Ii8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+/+4ADkFkb2JlAGTAAAAAAf/bAIQABgQEBAUEBgUFBgkGBQYJCwgGBggLDAoKCwoKDBAMDAwMDAwQDA4PEA8ODBMTFBQTExwbGxscHx8fHx8fHx8fHwEHBwcNDA0YEBAYGhURFRofHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8f/8AAEQgAKgBAAwERAAIRAQMRAf/EAI4AAQACAgMAAAAAAAAAAAAAAAAEBQEDAgYHAQEAAgMBAQAAAAAAAAAAAAAAAgYDBAUBBxAAAQMBBgMFCAMAAAAAAAAAAQIDBAAREpMFVQZR0RYyktIzFTFBIkJiExQ0YXGREQACAQEGBQMDBQAAAAAAAAAAAQIDETGRUhMUIUFREgRxoSJhgTLwscHRBf/aAAwDAQACEQMRAD8ApFOOLUVKUVKUbVKJJJJ95rln0xIxeVxNALyuJoBeVxNALyuJoBeVxNALyuJoDKXHEKCkqKVJNqVAkEEe8UDR7x6BkWnRcFvw1R9zVzSxZXdafV4nFeS7babW7Ihw2GGkqW46tlsJSlItJPw1m8edarNRU2rfqzx1qnJybKyBL2JNnrhNxGmXb9xhciGGkOKtu3bxT8JvggBVnD2105+FUsfbVeN/D1/SJz14xUndzslbYWvoGRadFwW/DXG3NXNLFkdafV4j0DItOi4LfhpuauaWLGtPq8R6BkWnRcFvw03NXNLFjWn1eI9AyLTouC34abmrmlixrT6vEegZFp0XBb8NNzVzSxY1p9XiT6wGM6vuF8QkFMWJLiflvoVmMlX47iS2oFF5KG1POAKCRZeb/wAqwLxYqEJW2vstSfX6Xe7Njxvm+Li+26/+bFgzOxsz2q4p9qQuL+XFlqBelXY6xHKQEFJIZBVeCrRZaKsFD/LhoRlWj+azP+zR8rynOpKFNy+KuSt+XuXMERVyHpbUKQw7IN2Q+6uOptZaN1ASGnHFAhJ+YCqr53jqnRptO3jL0v5cLfW37Gbul+LaaXrbx9V+xOrkgUAoBQCgKSREczGG9CGVpyq8QtUkfaV91YcCiVhtRUSeJrt1/JppU7JqXarOCljxSRHx6s1NuSl92vYhP7FQiOlMaW0VvtluaS0oG0qcsWiwi8brtnxe8A/xWat51Hsj8pSceXLl1uuNil5Vkm3CzD3LmKsmXc9ITF+2lSDmFrRW6kKF0KuEr/q2tTy6sJUIRU4uUeSUrePHmrOF15pwlPudttnqrPtx5k+uSZhQCgFAeFdUbj1OVjL51dtnRyRwLDoU8qHVG49TlYy+dNnRyRwGhTyodUbj1OVjL502dHJHAaFPKh1RuPU5WMvnTZ0ckcBoU8qHVG49TlYy+dNnRyRwGhTyodUbj1OVjL502dHJHAaFPKh1RuPU5WMvnTZ0ckcBoU8qHVG49TlYy+dNnRyRwGhTyohyf2XfK7avK7Ht+T6eFbTJRuV5r7teEh3aAd2gHdoB3aAd2gNkb9lryu2nzex7fn+njXqIyud5/9k="> Spanish</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Offer Link -->
                <h5 class="text-sm text-primary-50 text-center">Free Delivery Over $50 <a class="font-semibold underline" href="javascript:void(0)">Claim Offer</a></h5>

                <ul class="flex items-center justify-end gap-4">
                    <li class="flex menu-item">
                        <a class="text-sm hover:text-primary" href="faqs.html">Help</a>
                    </li>

                    <li class="flex menu-item">
                        <a class="text-sm hover:text-primary" href="contact-us.html">Contact Us</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <!-- Main Navigation Menu -->
    <header id="navbar" class="sticky top-0 z-20 border-b border-default-200 bg-transparent transition-all">
        <div class="lg:h-20 h-14 flex items-center">
            <div class="container">
                <div class="grid lg:grid-cols-3 grid-cols-2 items-center gap-4">
                    <div class="flex">
                        <!-- Mobile Menu Toggle Button -->
                        <button class="lg:hidden block " data-hs-overlay="#mobile-menu">
                            <i data-lucide="menu" class="w-7 h-7 text-default-600 me-4 hover:text-primary"></i>
                        </button>

                        <!-- Navbar Brand Logo -->
                        <a href="home.html">
                            <img src="/assets/logo-dark-6dbab3e1.png" alt="logo" class="h-10 flex dark:hidden">
                            <img src="/assets/logo-light-35c89c2c.png" alt="logo" class="h-10 hidden dark:flex">
                        </a>
                    </div>

                    <!-- Nevigation Menu -->
                    <ul class="menu lg:flex items-center justify-center hidden relative">
                        <!-- Home Menu -->
                        <li class="menu-item">
                            <a class="inline-flex items-center text-sm lg:text-base font-medium text-default-800 py-2 px-4 rounded-full hover:text-primary " href="{{route('welcome')}}">Home </a>
                        </li>

                        <!-- Product Menu -->
                        <li class="menu-item">
                            <a class="inline-flex items-center text-sm lg:text-base font-medium text-default-800 py-2 px-4 rounded-full hover:text-primary " href="{{route('carts')}}">Carts </a>
                        </li>

                        <li class="menu-item">
                            <a class="inline-flex items-center text-sm lg:text-base font-medium text-default-800 py-2 px-4 rounded-full hover:text-primary " href="{{route('checkout')}}">Checkout </a>
                        </li>

                        <li class="menu-item">
                            <a class="inline-flex items-center text-sm lg:text-base font-medium text-default-800 py-2 px-4 rounded-full hover:text-primary " href="{{route('productdetails')}}">Product Details </a>
                        </li>
                    </ul>
                    <a class="inline-flex items-center text-sm lg:text-base font-medium text-default-800 py-2 px-4 rounded-full hover:text-primary " href="{{route('products')}}">Product</a>

                    <ul class="flex items-center justify-end gap-x-6">
                        <!-- Search Form Input -->
                        <li class="2xl:flex relative menu-item hidden">
                            <input class="ps-10 pe-4 py-2.5 block w-64 border-transparent placeholder-primary-500 rounded-full text-sm bg-primary-400/40 text-primary" placeholder="Search for items..." type="search">
                            <span class="absolute start-4 top-3">
                                <i class="w-4 h-4 text-primary-500" data-lucide="search"></i>
                            </span>
                        </li>

                        <!-- Search Button (small screen) -->
                        <li class="2xl:hidden flex menu-item">
                            <button data-hs-overlay="#mobileSearchSidebar" class="relative flex text-base transition-all text-default-600 hover:text-primary">
                                <i class="w-5 h-5" data-lucide="search"></i>
                            </button>
                        </li>

                        <!-- Cart Page link -->
                        <li class="flex menu-item">
                            <a href="cart.html" class="relative flex text-base transition-all text-default-600 hover:text-primary">
                                <i class="w-5 h-5" data-lucide="shopping-bag"></i>
                                <span class="absolute z-10 -top-2.5 end-0 inline-flex items-center justify-center p-1 h-5 w-5 text-xs font-bold leading-none text-red-100 transform translate-x-1/2 bg-red-500 rounded-full">1</span>
                            </a>
                        </li>

                        <!-- User Dropdown -->
                        <li class="flex menu-item">
                            <div class="hs-dropdown relative inline-flex [--trigger:hover] [--placement:bottom]">
                                <a class="hs-dropdown-toggle after:absolute hover:after:-bottom-10 after:inset-0 relative flex items-center text-base transition-all text-default-600 hover:text-primary" href="javascript:void(0)">
                                    <i class="w-5 h-5" data-lucide="user"></i>
                                </a>

                                <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 min-w-[200px] transition-[opacity,margin] mt-4 opacity-0 hidden z-20 bg-white shadow-[rgba(17,_17,_26,_0.1)_0px_0px_16px] rounded-lg border border-default-100 p-1.5 dark:bg-default-50">
                                    <ul class="flex flex-col gap-1">
                                        <li>
                                            <a class="flex items-center gap-3 font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-100 rounded" href="admin-dashboard.html" target="_blank"><i class="h-4 w-4" data-lucide="user-circle"></i> Admin</a>
                                        </li>
                                        <li>
                                            <a class="flex items-center gap-3 font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-100 rounded" href="cart.html"><i class="h-4 w-4" data-lucide="shopping-cart"></i>
                                                Cart</a>
                                        </li>
                                        <li>
                                            <a class="flex items-center gap-3 font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-100 rounded" href="wishlist.html"><i class="h-4 w-4" data-lucide="heart"></i>
                                                Wishlist</a>
                                        </li>
                                        <li>
                                            <a class="flex items-center gap-3 font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-100 rounded" href="auth-login.html"><i class="h-4 w-4" data-lucide="log-out"></i> Log Out</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <!-- Mobile Nav (Bottom Navbar) -->
    <div class="flex lg:hidden">
        <div class="fixed inset-x-0 bottom-0 h-16 w-full grid grid-cols-3 items-center justify-items-center border-t border-default-200 bg-white dark:bg-default-50 z-40">
            <a href="home.html" class="flex flex-col items-center justify-center gap-1 text-default-600" type="button">
                <i class="fa-solid fa-house text-lg"></i>
                <span class="text-xs font-medium">Home</span>
            </a>
            <a href="product-grid.html" class="flex flex-col items-center justify-center gap-1 text-default-600" type="button">
                <i class="fa-solid fa-utensils text-lg"></i>
                <span class="text-xs font-medium">Food</span>
            </a>
            <a href="wishlist.html" class="flex flex-col items-center justify-center gap-1 text-default-600" type="button">
                <i class="fa-regular fa-heart text-lg"></i>
                <span class="text-xs font-medium">Wishlist</span>
            </a>
        </div>
    </div>

    <!-- Mobile Menu (Sidebar Menu) -->
    <div id="mobile-menu" class="hs-overlay hs-overlay-open:translate-x-0 hidden -translate-x-full fixed top-0 left-0 transition-all transform h-full max-w-[270px] w-full z-60  border-r border-default-200 bg-white dark:bg-default-50" tabindex="-1">
        <div class="flex justify-center items-center border-b border-dashed border-default-200 h-16 transition-all duration-300">
            <a href="home.html">
                <img src="/assets/logo-dark-6dbab3e1.png" alt="logo" class="h-10 flex dark:hidden">
                <img src="/assets/logo-light-35c89c2c.png" alt="logo" class="h-10 hidden dark:flex">
            </a>
        </div>
        <div class="h-[calc(100%-4rem)]" data-simplebar>
            <nav class="hs-accordion-group p-4 w-full flex flex-col flex-wrap">
                <ul class="space-y-2.5">
                    <li>
                        <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm font-medium text-default-700 rounded-md hover:bg-default-100" href="home.html">
                            Home
                        </a>
                    </li>

                    <li class="hs-accordion" id="product-categories-accordion">
                        <a class="hs-accordion-toggle flex items-center gap-x-3.5 py-2 px-2.5 hs-accordion-active:text-primary hs-accordion-active:bg-default-100 text-sm font-medium text-default-700 rounded-md hover:bg-default-100" href="javascript:;">
                            Product <i data-lucide="chevron-down" class="w-5 h-5 ms-auto hs-accordion-active:rotate-180 transition-all"></i>
                        </a>

                        <div id="product-categories-accordion" class="hs-accordion-content w-full overflow-hidden transition-[height] hidden">
                            <ul class="pt-2 ps-2">
                                <li>
                                    <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm font-medium text-default-700 rounded-md hover:bg-default-100" href="{{route ('products') }}">
                                        Product Grid
                                    </a>
                                </li>
                                <li>
                                    <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm font-medium text-default-700 rounded-md hover:bg-default-100" href="product-list.html">
                                        Product List
                                    </a>
                                </li>
                                <li>
                                    <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm font-medium text-default-700 rounded-md hover:bg-default-100" href="product-detail.html">
                                        Product Details
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm font-medium text-default-700 rounded-md hover:bg-default-100" href="wishlist.html">
                            My Wishlist
                        </a>
                    </li>

                    <li>
                        <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm font-medium text-default-700 rounded-md hover:bg-default-100" href="contact-us.html">
                            Contact Us
                        </a>
                    </li>

                    <li>
                        <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm font-medium text-default-700 rounded-md hover:bg-default-100" href="faqs.html">
                            FAQs
                        </a>
                    </li>

                    <li>
                        <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm font-medium text-default-700 rounded-md hover:bg-default-100" href="error-404.html">
                            Error Page
                        </a>
                    </li>

                    <li>
                        <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm font-medium text-default-700 rounded-md hover:bg-default-100" href="auth-login.html">
                            Login
                        </a>
                    </li>

                    <li>
                        <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm font-medium text-default-700 rounded-md hover:bg-default-100" href="auth-register.html">
                            Register
                        </a>
                    </li>

                    <li>
                        <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm font-medium text-default-700 rounded-md hover:bg-default-100" href="auth-recoverpw.html">
                            Forgot Password
                        </a>
                    </li>

                    <li>
                        <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm font-medium text-default-700 rounded-md hover:bg-default-100" href="auth-reset-password.html">
                            Reset Password
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <!-- Topbar Search Modal (Small Screen) -->
    <div id="mobileSearchSidebar" class="hs-overlay hidden w-full h-full fixed top-0 left-0 z-60 overflow-x-hidden overflow-y-auto">
        <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
            <div class="flex flex-col bg-white shadow-sm rounded-lg">
                <div class="relative flex w-full">
                    <span class="absolute start-4 top-3">
                        <i class="w-4 h-4 text-primary-500" data-lucide="search"></i>
                    </span>

                    <input class="px-10 py-2.5 block w-full border-transparent placeholder-primary-500 rounded-lg text-sm bg-transparent text-primary-500" placeholder="Search for items..." type="search">

                    <button class="absolute end-4 top-3" data-hs-overlay="#mobileSearchSidebar">
                        <i class="w-4 h-4 text-primary-500" data-lucide="x"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{$slot}}
    <!-- Hero Section -->

    <footer class="border-t border-default-200">
        <div class="container">
            <div class="grid lg:grid-cols-3 items-center gap-6 lg:py-10 py-6">
                <div class="lg:col-span-2">
                    <div class="grid md:grid-cols-4 grid-cols-2 gap-6 mb-6">
                        <div class="flex flex-col gap-3">
                            <h5 class="mb-3 font-semibold text-default-950">About</h5>
                            <div class="text-default-600"><a href="javascript:void(0);">About Us</a></div>
                            <div class="text-default-600"><a href="javascript:void(0);">Features</a></div>
                            <div class="text-default-600"><a href="javascript:void(0);">News</a></div>
                            <div class="text-default-600"><a href="javascript:void(0);">Careers</a></div>
                            <div class="text-default-600"><a href="javascript:void(0);">Services</a></div>
                        </div>

                        <div class="flex flex-col gap-3">
                            <h5 class="mb-3 font-semibold text-default-950">Company</h5>
                            <div class="text-default-600"><a href="javascript:void(0);">Our Team</a></div>
                            <div class="text-default-600"><a href="javascript:void(0);">Partner with Us</a></div>
                            <div class="text-default-600"><a href="javascript:void(0);">FAQs</a></div>
                            <div class="text-default-600"><a href="javascript:void(0);">Blog</a></div>
                        </div>

                        <div class="flex flex-col gap-3">
                            <h5 class="mb-3 font-semibold text-default-950">Support</h5>
                            <div class="text-default-600"><a href="javascript:void(0);">About</a></div>
                            <div class="text-default-600"><a href="javascript:void(0);">Support Center</a></div>
                            <div class="text-default-600"><a href="javascript:void(0);">Feedback</a></div>
                            <div class="text-default-600"><a href="javascript:void(0);">Contact Us</a></div>
                            <div class="text-default-600"><a href="javascript:void(0);">Accessibility</a></div>
                        </div>

                        <div class="flex flex-col gap-3">
                            <h5 class="mb-3 font-semibold text-default-950">Get in touch</h5>
                            <div class="text-default-600"><a href="javascript:void(0);">(+123) 456 789 123</a></div>
                            <div class="text-default-600"><a href="javascript:void(0);">example@mail.com</a></div>
                            <div class="flex items-center gap-4">
                                <a href="#!" class="cursor-pointer">
                                    <i data-lucide="phone" class="h-6 w-6 transition-all text-default-600 hover:text-primary"></i>
                                </a>
                                <a href="#!" class="cursor-pointer">
                                    <i data-lucide="globe" class="h-6 w-6 transition-all text-default-600 hover:text-primary"></i>
                                </a>
                                <a href="#!" class="cursor-pointer">
                                    <i data-lucide="instagram" class="h-6 w-6 transition-all text-default-600 hover:text-primary"></i>
                                </a>
                                <a href="#!" class="cursor-pointer">
                                    <i data-lucide="twitter" class="h-6 w-6 transition-all text-default-600 hover:text-primary"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-1">
                    <div class="flex flex-col gap-3">
                        <div class="bg-primary/10 rounded-lg">
                            <div class="p-8">
                                <form class="space-y-2 mb-6">
                                    <label for="subscribeEmail" class="text-lg font-medium text-default-950 mb-4">Subscribe</label>
                                    <div class="flex rounded-md shadow-sm">
                                        <input type="email" id="subscribeEmail" name="subscribeEmail" class="py-3 px-4 block w-full bg-white border-default-200 rounded-s-md text-sm dark:bg-default-50" placeholder="Email address" />
                                        <button type="button" class="inline-flex flex-shrink-0 justify-center items-center h-[2.875rem] w-[2.875rem] rounded-e-md border border-transparent font-semibold bg-primary text-white hover:bg-primary-500 transition-all text-sm">
                                            <i data-lucide="arrow-right" class="h-5 w-5"></i>
                                        </button>
                                    </div>
                                </form>
                                <p class="text-sm text-default-500 mb-6">A Res is a self-service shop offering a wide variety of food, beverages & household products we’re engage with their clients & their team.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="py-6 border-t border-default-200 lg:flex hidden">
                <div class="container">
                    <div class="grid lg:grid-cols-2 items-center gap-6">
                        <div>
                            <p class="text-default-600">
                                <script>document.write(new Date().getFullYear())</script> Design crafted <i data-lucide="heart" class="inline h-4 w-4 text-red-500 fill-red-500"></i> by Coderthemes.com
                            </p>
                        </div>

                        <div class="flex justify-end gap-6">
                            <a href="javascript:void(0)" class="text-default-500 font-medium">
                                Terms
                            </a>
                            <a href="javascript:void(0)" class="text-default-500 font-medium">
                                Privacy
                            </a>
                            <a href="javascript:void(0)" class="text-default-500 font-medium">
                                Cookies
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top & Light/Dark Toggle -->
    <div class="fixed lg:bottom-5 end-5 bottom-18 flex flex-col items-center bg-primary/25 rounded-full z-10">
        <button class="h-0 w-8 opacity-0 flex justify-center items-center transition-all duration-500 translate-y-5 z-10" data-toggle="back-to-top">
            <i class="h-5 w-5 text-primary-500 mt-1" data-lucide="chevron-up"></i>
        </button>
        <button class="rounded-full h-10 w-10 bg-primary text-white flex justify-center items-center z-20">
            <i class="h-5 w-5" data-lucide="sun" id="light-theme"></i>
            <i class="h-5 w-5" data-lucide="moon" id="dark-theme"></i>
        </button>
    </div>




</body>


<!-- Mirrored from coderthemes.com/yum/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Sep 2024 11:34:07 GMT -->
</html>
