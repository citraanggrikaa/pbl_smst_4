@extends('layouts.main')

@section('title', 'Blog Single')

@section('content')
    @push('css')
        <style>
            /* GANTI CSS AVATAR LAMA ANDA DENGAN YANG INI */

            #ai-avatar {
                width: 180px;
                /* Ukuran bisa disesuaikan */
                height: 180px;
                /* Ganti 'nama-file-gambar-anda.png' dengan nama file yang Anda simpan */
                background-image: url("{{ asset('images/avatar_diah_sprite.webp') }}");
                background-size: cover;
                /* Memastikan gambar pas */
                background-position: center;
                background-repeat: no-repeat;
                border-radius: 50%;
                border: 4px solid #fff;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
                /* Transisi untuk animasi yang mulus */
                transition: transform 0.3s ease-in-out;
            }

            /* Kelas ini akan ditambahkan/dihapus oleh JavaScript saat AI berbicara */
            #ai-avatar.is-speaking {
                /* Menjalankan animasi 'pulse' */
                animation: pulse-breathing 2s infinite ease-in-out;
            }

            /* Definisi animasi 'pulse-breathing' */
            @keyframes pulse-breathing {
                0% {
                    transform: scale(1);
                    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
                }

                50% {
                    transform: scale(1.05);
                    /* Sedikit membesar */
                    box-shadow: 0 8px 25px rgba(75, 143, 222, 0.4);
                    /* Bayangan berwarna saat 'aktif' */
                }

                100% {
                    transform: scale(1);
                    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
                }
            }

            /* Tambahkan ini di dalam tag <style> Anda */

            /* Gaya untuk placeholder saat AI sedang berbicara */
            .ai-bubble .speaking-indicator {
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 10px 0;
            }

            .ai-bubble .wave-bar {
                background-color: #888;
                /* Warna berbeda untuk animasi di dalam bubble */
                height: 20px;
            }

            /* CSS untuk Animasi Gelombang Suara */
            .wave-bar {
                display: inline-block;
                width: 5px;
                height: 30px;
                margin: 0 2px;
                background-color: #007bff;
                animation: sound-wave 1.2s infinite ease-in-out;
            }

            .wave-bar:nth-child(2) {
                animation-delay: -1.1s;
            }

            .wave-bar:nth-child(3) {
                animation-delay: -1.0s;
            }

            .wave-bar:nth-child(4) {
                animation-delay: -0.9s;
            }

            .wave-bar:nth-child(5) {
                animation-delay: -0.8s;
            }

            @keyframes sound-wave {

                0%,
                40%,
                100% {
                    transform: scaleY(0.4);
                }

                20% {
                    transform: scaleY(1.0);
                }
            }

            /* CSS untuk Balon Chat */
            .ai-bubble,
            .user-bubble {
                padding: 10px 15px;
                border-radius: 20px;
                margin-bottom: 10px;
                max-width: 85%;
                word-wrap: break-word;
            }

            .ai-bubble {
                background-color: #f1f0f0;
                align-self: flex-start;
                text-align: left;
            }

            .user-bubble {
                background-color: #007bff;
                color: white;
                align-self: flex-end;
                margin-left: auto;
                text-align: left;
            }

            #ai-chat-body {
                display: flex;
                flex-direction: column;
            }

            /* ============================================================== */
            /* GAYA UNTUK ASISTEN AI (MOBILE FIRST) */
            /* ============================================================== */

            /* Gaya Dasar untuk Tombol Mikrofon Mengambang */
            #start-ai-btn {
                position: fixed;
                bottom: 20px;
                right: 20px;
                width: 60px;
                height: 60px;
                z-index: 1000;
            }

            /* Gaya Dasar untuk Jendela Chat */
            #ai-chat-window {
                display: none;
                position: fixed;
                bottom: 90px;
                right: 20px;
                width: 350px;
                /* Ukuran default untuk mobile */
                max-width: 90%;
                height: 700px;
                /* Ukuran default untuk mobile */
                background-color: white;
                z-index: 999;
                flex-direction: column;
                transition: all 0.3s ease-in-out;
                /* Animasi transisi */
            }


            /* ============================================================== */
            /* GAYA UNTUK LAYAR DESKTOP (LEBIH BESAR) */
            /* ============================================================== */

            /* Terapkan gaya ini jika lebar layar 768px atau lebih */
            @media (min-width: 768px) {
                #start-ai-btn {
                    bottom: 30px;
                    right: 30px;
                }

                #ai-chat-window {
                    width: 600px;
                    /* Lebar lebih besar untuk desktop */
                    height: 700px;
                    /* Tinggi lebih besar untuk desktop */
                    bottom: 100px;
                    right: 30px;
                }
            }
        </style>
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}">

        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

        <link rel="stylesheet" href="{{ asset('css/aos.css') }}">

        <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">

        <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
        <link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css') }}">


        <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @endpush

    {{-- ================================================================= --}}
    {{-- ============== BAGIAN UNTUK ASISTEN SUARA AI ================== --}}
    {{-- ================================================================= --}}

    <button id="start-ai-btn" class="btn btn-primary rounded-circle shadow">
        <i class="fas fa-microphone fa-lg"></i>
    </button>

    <div id="ai-chat-window" class="shadow-lg rounded">

        {{-- Ganti bagian header chat yang lama --}}
        <div class="p-3 d-flex flex-column justify-content-center align-items-center"
            style="background-color: #001f3f; color: white; border-top-left-radius: 0.25rem; border-top-right-radius: 0.25rem;">

            {{-- Elemen Avatar Baru --}}
            <div id="ai-avatar" class="mb-2"></div>

            <h6 class="mb-0">I'm Kirana, Your Personal Tour Guide</h6>
            <button id="close-ai-btn" type="button" class="close"
                style="color: white; opacity: 1; position: absolute; top: 10px; right: 15px;">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div id="ai-chat-body" class="p-3" style="flex-grow: 1; overflow-y: auto;">
            {{-- Gelembung chat sambutan awal --}}
            <div class="ai-bubble">Hello! Can I help you tell me about {{ $destination->title }}?</div>
        </div>
        {{-- ... sisa kode tidak berubah ... --}}

        <div id="ai-chat-footer" class="p-3 text-center d-flex flex-column align-items-center justify-content-center"
            style="border-top: 1px solid #eee;">

            <button id="ask-mic-btn" class="btn btn-primary rounded-circle mb-2" style="width: 50px; height: 50px;">
                <i class="fas fa-microphone"></i>
            </button>

            <div id="ai-status-text" style="color: #888; font-style: italic;">Press the microphone to ask a question</div>

            <div id="sound-wave-animation" style="display: none; margin-top: 10px;">
                <div class="wave-bar"></div>
                <div class="wave-bar"></div>
                <div class="wave-bar"></div>
                <div class="wave-bar"></div>
                <div class="wave-bar"></div>
            </div>
        </div>
    </div>

    <main class="container py-5 px-3 pt-[20px] pb-5">
        {{-- Judul & Alamat di Tengah --}}
        <div class="text-center">

            {{-- Judul Destinasi --}}
            <h1 class="text-4xl font-bold mb-2">{{ $destination->title }}</h1>

            {{-- Alamat Destinasi --}}
            <h5 class="text-lg text-gray-600 mb-6">{{ $destination->address }}</h5>
        </div>

        {{-- Gambar Destinasi --}}
        <div class="d-flex justify-content-center">
            <img src="{{ url('storage/'.$destination->image) }}" alt="Gambar Destinasi" class="rounded-lg shadow-md mb-4 img-fluid"
                style="max-width: 600px; width: 100%; height: auto;" />
        </div>



        {{-- Deskripsi --}}
        <div class="text-justify text-gray-700 leading-relaxed mb-24">
            <p>{{ $destination->created_at }} {!! $destination->desc !!} </p>
        </div>
    </main>
   @push('script')
        <!-- Scripts -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
        <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('js/aos.js') }}"></script>
        <script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
        <script src="{{ asset('js/jquery.timepicker.min.js') }}"></script>
        <script src="{{ asset('js/scrollax.min.js') }}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
        <script src="{{ asset('js/google-map.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
        <script>
            window.addEventListener('scroll', () => {
                const nav = document.querySelector('nav.navbar');
                const links = nav.querySelectorAll('.nav-link, .navbar-brand, button');

                if (window.scrollY > 30) {
                    nav.style.backgroundColor = 'rgba(255, 255, 255, 0.8)';
                    nav.style.backdropFilter = 'blur(10px)';
                    nav.style.webkitBackdropFilter = 'blur(10px)';
                    links.forEach(el => {
                        el.classList.remove('text-dark', 'text-white');
                        el.style.color = '#001f3f'; // Navy
                    });
                } else {
                    nav.style.backgroundColor = 'rgba(255, 255, 255, 0.8)';
                    nav.style.backdropFilter = 'blur(10px)';
                    nav.style.webkitBackdropFilter = 'blur(10px)';
                    links.forEach(el => {
                        el.style.color = '';
                        el.classList.remove('text-white');
                        el.classList.add('text-dark');
                    });
                }
            });
        </script>
        <script>
            document.getElementById('toggleSearch').addEventListener('click', function() {
                const bar = document.getElementById('searchBar');
                bar.style.display = bar.style.display === 'none' ? 'flex' : 'none';
            });
        </script>
    @endpush

    @push('script')
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        {{-- ... sisanya ... --}}
        <script src="{{ asset('js/main.js') }}"></script>

        {{-- GANTI SEMUA LOGIKA JAVASCRIPT LAMA ANDA DENGAN YANG DI BAWAH INI --}}
        <script>
            document.addEventListener('DOMContentLoaded', function() {



                // ========================================================
                // ELEMEN UI
                // ========================================================
                const aiAvatar = document.getElementById('ai-avatar');
                const startAiBtn = document.getElementById('start-ai-btn');
                const closeAiBtn = document.getElementById('close-ai-btn');
                const aiChatWindow = document.getElementById('ai-chat-window');
                const aiChatBody = document.getElementById('ai-chat-body');
                const aiStatusText = document.getElementById('ai-status-text');
                const soundWaveAnimation = document.getElementById('sound-wave-animation');
                const askMicBtn = document.getElementById('ask-mic-btn');

                // ========================================================
                // KONTEKS DARI HALAMAN
                // ========================================================
                const destinationTitle = document.querySelector('h1').textContent;
                const destinationDesc = document.querySelector('.text-justify p').textContent;

                // ========================================================
                // INISIALISASI SPEECH RECOGNITION API
                // ========================================================
                const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;

                // Periksa dukungan browser sebelum melanjutkan
                if (!SpeechRecognition) {
                    aiStatusText.textContent = 'Browser Anda tidak mendukung fitur suara.';
                    askMicBtn.disabled = true;
                    console.error("Speech Recognition tidak didukung oleh browser ini.");
                    return; // Hentikan eksekusi jika tidak didukung
                }

                const recognition = new SpeechRecognition();
                recognition.lang = 'id-ID';
                recognition.interimResults = false;
                recognition.continuous = false;

                // ========================================================
                // EVENT LISTENERS UNTUK UI
                // ========================================================
                startAiBtn.addEventListener('click', () => {
                    aiChatWindow.style.display = 'flex';
                    startAiBtn.style.display = 'none';
                });

                closeAiBtn.addEventListener('click', () => {
                    aiChatWindow.style.display = 'none';
                    startAiBtn.style.display = 'block';
                });

                askMicBtn.addEventListener('click', () => {
                    try {
                        recognition.start();
                    } catch (e) {
                        console.error("Recognition bisa jadi sudah berjalan.", e);
                    }
                });


                // ========================================================
                // EVENT LISTENERS UNTUK SPEECH RECOGNITION
                // ========================================================
                recognition.onstart = () => {
                    aiStatusText.textContent = 'Sedang mendengarkan...';
                    askMicBtn.disabled = true; // Nonaktifkan tombol saat mendengarkan
                    soundWaveAnimation.style.display = 'flex';
                };

                recognition.onend = () => {
                    aiStatusText.textContent = 'Press the microphone to ask a question';
                    askMicBtn.disabled = false; // Aktifkan kembali tombol
                    soundWaveAnimation.style.display = 'none';
                };

                recognition.onerror = (event) => {
                    if (event.error === 'no-speech') {
                        aiStatusText.textContent = 'Tidak ada suara terdeteksi. Silakan coba lagi.';
                    } else {
                        aiStatusText.textContent = 'Terjadi error. Coba lagi.';
                    }
                    console.error('Speech recognition error:', event.error);
                };

                recognition.onresult = (event) => {
                    const transcript = event.results[0][0].transcript;
                    addBubbleToChat(transcript, 'user');
                    askTheGuide(transcript);
                };


                // ========================================================
                // FUNGSI-FUNGSI UTAMA
                // ========================================================

                /**
                 * Mengirim pertanyaan ke API dan mengelola respons.
                 * @param {string} promptText - Teks pertanyaan dari user.
                 */
                async function askTheGuide(promptText) {
                    aiStatusText.textContent = 'AI sedang berpikir...';
                    // Buat gelembung chat placeholder untuk AI
                    const aiBubble = createAiPlaceholderBubble();

                    const payload = {
                        prompt: promptText,
                        context: {
                            title: destinationTitle,
                            description: destinationDesc
                        }
                    };

                    try {
                        const response = await fetch('http://127.0.0.1:8001/voice-process', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json'
                            },
                            body: JSON.stringify(payload)
                        });

                        if (!response.ok) throw new Error(`API Error: ${response.statusText}`);

                        const result = await response.json();

                        if (result.status === 'success') {
                            const textAnswer = result.data.text_answer;
                            const base64Audio = result.data.audio_base64;

                            // Perbarui status dan mulai putar audio
                            aiStatusText.textContent = 'AI sedang menjawab...';
                            if (base64Audio && base64Audio !== "dev_mode_audio_disabled") {
                                // Kirim gelembung AI dan teks jawaban ke fungsi audio
                                playAudio(base64Audio, aiBubble, textAnswer);
                            } else {
                                // Jika tidak ada audio, langsung tampilkan teks
                                fillAiBubble(aiBubble, textAnswer);
                                aiStatusText.textContent = 'Press the microphone to ask a question';
                            }
                        } else {
                            fillAiBubble(aiBubble, `Maaf, terjadi kesalahan: ${result.message}`);
                        }

                    } catch (error) {
                        console.error('Error calling API:', error);
                        fillAiBubble(aiBubble, 'Waduh, sepertinya ada masalah koneksi. Coba sesaat lagi ya.');
                    }
                }

                /**
                 * Menambahkan gelembung chat ke UI.
                 * @param {string} text - Teks untuk ditampilkan.
                 * @param {'user' | 'ai'} sender - Pengirim pesan.
                 */
                function addBubbleToChat(text, sender) {
                    const bubble = document.createElement('div');
                    bubble.textContent = text;
                    bubble.classList.add(sender === 'user' ? 'user-bubble' : 'ai-bubble');
                    aiChatBody.appendChild(bubble);
                    scrollToBottom();
                }

                /**
                 * Membuat gelembung chat AI dengan animasi "sedang berbicara".
                 * @returns {HTMLElement} Elemen gelembung AI yang baru dibuat.
                 */
                function createAiPlaceholderBubble() {
                    const bubble = document.createElement('div');
                    bubble.classList.add('ai-bubble');
                    // Ini adalah animasi gelombang suara yang kita masukkan ke dalam bubble
                    bubble.innerHTML = `
                    <div class="speaking-indicator">
                        <div class="wave-bar"></div>
                        <div class="wave-bar"></div>
                        <div class="wave-bar"></div>
                        <div class="wave-bar"></div>
                        <div class="wave-bar"></div>
                    </div>
                `;
                    aiChatBody.appendChild(bubble);
                    scrollToBottom();
                    return bubble; // Kembalikan elemen bubble agar bisa dimanipulasi nanti
                }

                /**
                 * Mengisi gelembung AI yang sudah ada dengan teks jawaban.
                 * @param {HTMLElement} bubble - Elemen gelembung AI yang akan diisi.
                 * @param {string} text - Teks jawaban akhir.
                 */
                function fillAiBubble(bubble, text) {
                    bubble.innerHTML = ''; // Hapus animasi
                    bubble.textContent = text; // Isi dengan teks
                }

                /**
                 * Memainkan audio dari Base64 dan mengisi bubble setelah selesai.
                 * @param {string} base64String - Audio dalam format base64.
                 * @param {HTMLElement} bubble - Gelembung chat AI untuk diisi setelah audio selesai.
                 * @param {string} finalText - Teks yang akan ditampilkan di gelembung.
                 */
                /**
                 * Memainkan audio dari Base64, mengontrol animasi avatar, dan mengisi bubble.
                 * @param {string} base64String - Audio dalam format base64.
                 * @param {HTMLElement} bubble - Gelembung chat AI untuk diisi setelah audio selesai.
                 * @param {string} finalText - Teks yang akan ditampilkan di gelembung.
                 */
                function playAudio(base64String, bubble, finalText) {
                    const audioUrl = `data:audio/mp3;base64,${base64String}`;
                    const audio = new Audio(audioUrl);

                    // SEBELUM audio diputar
                    aiAvatar.classList.add('is-speaking'); // Mulai animasi berbicara

                    audio.play();

                    // SETELAH audio selesai diputar
                    audio.onended = () => {
                        aiAvatar.classList.remove('is-speaking'); // Hentikan animasi
                        fillAiBubble(bubble, finalText);
                        aiStatusText.textContent = 'Press the microphone to ask a question';
                    };

                    // JIKA GAGAL memutar audio
                    audio.onerror = () => {
                        console.error("Gagal memutar audio.");
                        aiAvatar.classList.remove('is-speaking'); // Pastikan animasi berhenti jika ada error
                        fillAiBubble(bubble, `(Gagal memutar suara) ${finalText}`);
                        aiStatusText.textContent = 'Press the microphone to ask a question';
                    }
                }
                /**
                 * Fungsi untuk scroll otomatis ke bawah.
                 */
                function scrollToBottom() {
                    aiChatBody.scrollTop = aiChatBody.scrollHeight;
                }

            }); // Akhir dari DOMContentLoaded
        </script>

        {{-- Hapus <style> duplikat di bawah jika ada, cukup satu di atas --}}
    @endpush
@endsection
