<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>maaf & selamat ulang tahun</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #0c0b16;
            font-family: 'Segoe UI', 'Helvetica Neue', Arial, sans-serif;
            padding: 20px;
            transition: background 0.8s ease;
        }

        body.damai {
            background: #1a142b;
        }

        .card {
            max-width: 600px;
            width: 100%;
            background: #141322;
            border-radius: 36px;
            padding: 44px 34px 38px;
            box-shadow: 0 30px 60px rgba(0,0,0,0.7), 0 0 0 1px rgba(255,215,0,0.06);
            border: 1px solid rgba(255,215,0,0.05);
            position: relative;
            transition: all 0.6s ease;
        }

        .card.damai {
            border-color: rgba(255, 180, 100, 0.15);
            box-shadow: 0 30px 70px rgba(255, 180, 100, 0.05), 0 0 0 1px rgba(255, 180, 100, 0.08);
        }

        .card::before {
            content: '';
            position: absolute;
            top: -1px;
            left: 15%;
            right: 15%;
            height: 2px;
            background: linear-gradient(90deg, transparent, rgba(255,215,0,0.2), transparent);
        }

        .date {
            color: #5a567a;
            font-size: 0.7rem;
            letter-spacing: 2.5px;
            text-transform: uppercase;
            margin-bottom: 20px;
            font-weight: 300;
        }

        .greeting {
            font-size: 2.2rem;
            font-weight: 300;
            color: #d4cfdd;
            margin-bottom: 2px;
        }

        .name {
            font-size: 3.2rem;
            font-weight: 700;
            background: linear-gradient(135deg, #f9d423, #f7971e);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            margin-bottom: 20px;
            line-height: 1.1;
        }

        .message-body {
            color: #c5c0d4;
            font-size: 0.98rem;
            line-height: 2;
            font-weight: 300;
            letter-spacing: 0.2px;
        }

        .message-body p {
            margin-bottom: 16px;
        }

        .message-body .highlight {
            color: #f7b731;
            font-weight: 400;
        }

        .message-body .maaf {
            color: #ff8a8a;
            font-weight: 400;
        }

        .divider {
            border: none;
            border-top: 1px solid rgba(255,215,0,0.06);
            margin: 26px 0 22px;
        }

        .closing {
            color: #9a95b5;
            font-size: 0.92rem;
            line-height: 1.8;
            font-weight: 300;
        }

        .button-wrap {
            margin-top: 30px;
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }

        .btn {
            padding: 15px 28px;
            border-radius: 60px;
            border: none;
            font-size: 0.95rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.22, 1, 0.36, 1);
            flex: 1;
            min-width: 130px;
            letter-spacing: 0.3px;
            font-family: inherit;
        }

        .btn-primary {
            background: linear-gradient(135deg, #f7b731, #e08f1a);
            color: #0c0b16;
            box-shadow: 0 8px 28px rgba(247, 183, 49, 0.2);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 14px 36px rgba(247, 183, 49, 0.35);
        }

        .btn-primary:active {
            transform: scale(0.95);
        }

        .btn-secondary {
            background: transparent;
            color: #9a95b5;
            border: 1px solid rgba(255,215,0,0.08);
        }

        .btn-secondary:hover {
            border-color: rgba(255,215,0,0.25);
            background: rgba(255,215,0,0.03);
        }

        .btn-damai {
            background: linear-gradient(135deg, #7c6b9e, #5a4a7a);
            color: #f0e8ff;
            border: none;
            box-shadow: 0 8px 28px rgba(90, 74, 122, 0.25);
            position: relative;
            overflow: hidden;
            transition: all 0.5s cubic-bezier(0.22, 1, 0.36, 1);
        }

        .btn-damai:hover {
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 14px 40px rgba(90, 74, 122, 0.4);
        }

        .btn-damai:active {
            transform: scale(0.95);
        }

        .btn-damai.damai-clicked {
            background: linear-gradient(135deg, #f7b731, #f59f1a);
            color: #0c0b16;
            box-shadow: 0 8px 40px rgba(247, 183, 49, 0.5);
            animation: glowPulse 1.5s ease-in-out infinite;
        }

        .btn-damai .sparkle {
            display: inline-block;
            transition: all 0.4s ease;
        }

        .btn-damai.damai-clicked .sparkle {
            animation: spinSparkle 2s linear infinite;
        }

        @keyframes glowPulse {
            0%, 100% { box-shadow: 0 8px 40px rgba(247, 183, 49, 0.4); }
            50% { box-shadow: 0 8px 60px rgba(247, 183, 49, 0.7); }
        }

        @keyframes spinSparkle {
            0% { transform: rotate(0deg) scale(1); }
            50% { transform: rotate(180deg) scale(1.2); }
            100% { transform: rotate(360deg) scale(1); }
        }

        .response-box {
            margin-top: 20px;
            padding: 18px 22px;
            border-radius: 20px;
            background: rgba(247, 183, 49, 0.05);
            border: 1px solid rgba(247, 183, 49, 0.08);
            color: #d4cfdd;
            font-size: 1.1rem;
            font-weight: 300;
            text-align: center;
            opacity: 0;
            transform: translateY(10px);
            transition: all 0.6s cubic-bezier(0.22, 1, 0.36, 1);
            min-height: 0;
            overflow: hidden;
            max-height: 0;
            padding: 0 22px;
            border-width: 0;
        }

        .response-box.show {
            opacity: 1;
            transform: translateY(0);
            max-height: 200px;
            padding: 18px 22px;
            border-width: 1px;
        }

        .response-box .response-text {
            font-size: 1.4rem;
            font-weight: 700;
            background: linear-gradient(135deg, #f9d423, #f7971e);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            display: block;
            margin-top: 4px;
        }

        .response-box .response-sub {
            font-size: 0.85rem;
            color: #9a95b5;
            margin-top: 6px;
        }

        /* BALON */
        .balon-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 0;
            overflow: hidden;
        }

        .balon {
            position: absolute;
            bottom: -100px;
            font-size: 2rem;
            animation: naik 15s linear infinite;
            opacity: 0.08;
        }

        @keyframes naik {
            0% { transform: translateY(0) rotate(0deg); opacity: 0.05; }
            50% { opacity: 0.15; }
            100% { transform: translateY(-120vh) rotate(20deg); opacity: 0; }
        }

        .toast {
            position: fixed;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%) translateY(80px);
            background: #1a1830;
            color: #d4cfdd;
            padding: 14px 28px;
            border-radius: 40px;
            border: 1px solid rgba(255,215,0,0.08);
            font-size: 0.9rem;
            opacity: 0;
            transition: all 0.5s cubic-bezier(0.22, 1, 0.36, 1);
            z-index: 99;
            backdrop-filter: blur(12px);
            text-align: center;
            max-width: 90%;
            pointer-events: none;
        }

        .toast.show {
            opacity: 1;
            transform: translateX(-50%) translateY(0);
        }

        .hidden {
            display: none !important;
        }

        @media (max-width: 480px) {
            .card { padding: 28px 18px 26px; border-radius: 28px; }
            .greeting { font-size: 1.8rem; }
            .name { font-size: 2.5rem; }
            .message-body { font-size: 0.92rem; }
            .btn { font-size: 0.85rem; padding: 13px 18px; min-width: 100px; }
            .response-box .response-text { font-size: 1.2rem; }
        }
    </style>
</head>
<body>

    <div class="balon-container" id="balonContainer"></div>

    <div class="card" id="card">
        <div class="date">september 2026</div>

        <div class="greeting">untuk,</div>
        <div class="name" id="namaTampilan">Darest, kamu.</div>

        <div class="message-body" id="pesanTampilan">
            <p>Selamat ulang tahun.</p>
            <p>Ini dari orang yang berbulan-bulan lalu memilih diam. Bukan karena aku benci, bukan karena kamu salah. Tapi karena aku <span class="maaf">pengecut</span>.</p>
            <p>Aku takut. Takut bilang jujur, takut menyakiti, takut kehilangan — tapi pada akhirnya aku malah melakukan semua itu dengan cara yang lebih buruk: <span class="highlight">menghilang tanpa kabar.</span></p>
            <p>Aku tahu berbulan-bulan bukan waktu sebentar. Kamu mungkin bingung, mungkin marah, atau mungkin sudah nggak peduli. Dan itu semua <span class="maaf">hak kamu</span>.</p>
            <p><span class="maaf">Aku minta maaf.</span> Bukan karena aku ingin dimaafkan, tapi karena kamu layak mendengar itu. Kamu layak tahu bahwa aku sadar aku salah.</p>
            <p>Di hari ulang tahunmu ini — hari yang seharusnya tentang kamu — aku hadir dengan satu kejujuran yang tertunda: <span class="highlight">aku nggak bisa terus berada di sini dengan setengah hati.</span></p>
            <p>Bukan karena kamu kurang. Tapi karena <span class="maaf">aku belum utuh</span> untuk menjadi milik siapa pun.</p>
            <p>Kamu pantas dapat yang penuh. Bukan yang ragu-ragu seperti aku.</p>
            <p style="margin-top:20px;"><span class="maaf" style="font-size:1.1rem;">Maaf. Sungguh maaf.</span></p>
        </div>

        <hr class="divider" />

        <div class="closing">
            <p style="margin-bottom:4px;">aku harap kamu baik-baik saja,</p>
            <p style="font-weight:400; color:#d4cfdd;">— dari orang yang gagal jadi bagian baik dalam hidupmu</p>
        </div>

        <div class="button-wrap">
            <button class="btn btn-primary" id="btnKirim"> salin pesan ini</button>
            <button class="btn btn-damai" id="btnDamai">
                <span class="sparkle">🕊️</span> damai ya ini?
            </button>
        </div>

        <!-- Response box -->
        <div class="response-box" id="responseBox">
            <span class="response-text">"saya akan lawan!"</span>
            <div class="response-sub">— bukan lawan kamu, tapi lawan rasa takutku sendiri</div>
        </div>

        <div style="margin-top:16px; text-align:center;">
            <button class="btn btn-secondary" id="btnEdit" style="font-size:0.75rem; padding:8px 18px; min-width:auto; flex:none; border-color:rgba(255,215,0,0.05);">
                ✏️ edit pesan
            </button>
        </div>
    </div>

    <div class="toast" id="toast"></div>

    <script>
        (function() {
            // =============================================
            // KONFIGURASI
            // =============================================
            const NAMA = "Darest, kamu."; // GANTI DENGAN NAMA DIA
            const PESAN = `
                <p>Selamat ulang tahun.</p>
                <p>Ini dari orang yang berbulan-bulan lalu memilih diam. Bukan karena aku benci, bukan karena kamu salah. Tapi karena aku <span class="maaf">pengecut</span>.</p>
                <p>Aku takut. Takut bilang jujur, takut menyakiti, takut kehilangan — tapi pada akhirnya aku malah melakukan semua itu dengan cara yang lebih buruk: <span class="highlight">menghilang tanpa kabar.</span></p>
                <p>Aku tahu berbulan-bulan bukan waktu sebentar. Kamu mungkin bingung, mungkin marah, atau mungkin sudah nggak peduli. Dan itu semua <span class="maaf">hak kamu</span>.</p>
                <p><span class="maaf">Aku minta maaf.</span> Bukan karena aku ingin dimaafkan, tapi karena kamu layak mendengar itu. Kamu layak tahu bahwa aku sadar aku salah.</p>
                <p>Di hari ulang tahunmu ini — hari yang seharusnya tentang kamu — aku hadir dengan satu kejujuran yang tertunda: <span class="highlight">aku nggak bisa terus berada di sini dengan setengah hati.</span></p>
                <p>Bukan karena kamu kurang. Tapi karena <span class="maaf">aku belum utuh</span> untuk menjadi milik siapa pun.</p>
                <p>Kamu pantas dapat yang penuh. Bukan yang ragu-ragu seperti aku.</p>
                <p style="margin-top:20px;"><span class="maaf" style="font-size:1.1rem;">Maaf. Sungguh maaf.</span></p>
            `;

            // =============================================
            // ELEMEN
            // =============================================
            const namaEl = document.getElementById('namaTampilan');
            const pesanEl = document.getElementById('pesanTampilan');
            const btnKirim = document.getElementById('btnKirim');
            const btnDamai = document.getElementById('btnDamai');
            const btnEdit = document.getElementById('btnEdit');
            const responseBox = document.getElementById('responseBox');
            const toast = document.getElementById('toast');
            const card = document.getElementById('card');

            let isDamaiClicked = false;

            // Set konten
            namaEl.textContent = NAMA;
            pesanEl.innerHTML = PESAN;

            // =============================================
            // BALON (minimalis)
            // =============================================
            function buatBalon() {
                const container = document.getElementById('balonContainer');
                const emojis = ['🎈', '🎂', '✨', '🕊️', '🌙'];
                const el = document.createElement('div');
                el.className = 'balon';
                el.textContent = emojis[Math.floor(Math.random() * emojis.length)];
                el.style.left = Math.random() * 100 + '%';
                el.style.fontSize = (1.5 + Math.random() * 2.5) + 'rem';
                el.style.animationDuration = (12 + Math.random() * 12) + 's';
                el.style.animationDelay = (Math.random() * 10) + 's';
                container.appendChild(el);
                setTimeout(() => { if (el.parentNode) el.remove(); }, 28000);
            }

            for (let i = 0; i < 14; i++) setTimeout(buatBalon, i * 350);
            setInterval(buatBalon, 2800);

            // =============================================
            // TOAST
            // =============================================
            function showToast(msg, duration = 3500) {
                toast.textContent = msg;
                toast.classList.add('show');
                clearTimeout(toast._timer);
                toast._timer = setTimeout(() => toast.classList.remove('show'), duration);
            }

            // =============================================
            // TOMBOL "DAMAI YA INI?" 
            // =============================================
            btnDamai.addEventListener('click', function() {
                if (!isDamaiClicked) {
                    // Pertama kali diklik
                    isDamaiClicked = true;
                    
                    // Ubah tombol
                    this.classList.add('damai-clicked');
                    this.innerHTML = '<span class="sparkle">✨</span> sudah damai ✨';
                    
                    // Tampilkan response
                    responseBox.classList.add('show');
                    
                    // Efek card
                    card.classList.add('damai');
                    document.body.classList.add('damai');
                    
                    // Tambah balon spesial
                    for (let i = 0; i < 20; i++) {
                        setTimeout(() => {
                            const container = document.getElementById('balonContainer');
                            const el = document.createElement('div');
                            el.className = 'balon';
                            el.textContent = ['🕊️', '✨', '🌟', '💫', '🌙'][Math.floor(Math.random() * 5)];
                            el.style.left = Math.random() * 100 + '%';
                            el.style.fontSize = (2 + Math.random() * 3) + 'rem';
                            el.style.animationDuration = (8 + Math.random() * 8) + 's';
                            el.style.opacity = '0.25';
                            container.appendChild(el);
                            setTimeout(() => { if (el.parentNode) el.remove(); }, 18000);
                        }, i * 120);
                    }
                    
                    showToast('🕊️ "saya akan lawan!" — kata orang berani', 4000);
                    
                } else {
                    // Sudah diklik, tampilkan lagi response dengan efek
                    responseBox.classList.remove('show');
                    setTimeout(() => {
                        responseBox.classList.add('show');
                    }, 100);
                    
                    // Efek kilat
                    btnDamai.style.transform = 'scale(0.95)';
                    setTimeout(() => { btnDamai.style.transform = ''; }, 200);
                    
                    showToast('💪 "saya akan lawan!" — ingat itu ya', 3000);
                }
            });

            // =============================================
            // TOMBOL KIRIM (copy pesan)
            // =============================================
            btnKirim.addEventListener('click', function() {
                this.style.transform = 'scale(0.95)';
                setTimeout(() => { this.style.transform = ''; }, 150);

                // Ambil teks bersih
                const nama = namaEl.textContent;
                const pesanText = pesanEl.textContent.replace(/\s+/g, ' ').trim();
                
                // Tambahkan kalimat penutup jika tombol damai sudah diklik
                let tambahan = '';
                if (isDamaiClicked) {
                    tambahan = '\n\n"aku akan lawan." — dan aku mulai dengan mengirim ini.';
                }

                const fullMessage = `Halo ${nama},\n\n${pesanText}${tambahan}\n\n— dari aku`;

                if (navigator.clipboard) {
                    navigator.clipboard.writeText(fullMessage).then(() => {
                        showToast('📋 Pesan tercopy! Tempelkan ke chat dia.', 4000);
                    }).catch(() => fallbackCopy(fullMessage));
                } else {
                    fallbackCopy(fullMessage);
                }

                // Efek visual
                card.style.borderColor = 'rgba(255,215,0,0.15)';
                setTimeout(() => { card.style.borderColor = 'rgba(255,215,0,0.05)'; }, 800);
            });

            function fallbackCopy(text) {
                const textarea = document.createElement('textarea');
                textarea.value = text;
                textarea.style.position = 'fixed';
                textarea.style.opacity = '0';
                document.body.appendChild(textarea);
                textarea.select();
                try {
                    document.execCommand('copy');
                    showToast('📋 Pesan tercopy!', 3000);
                } catch (e) {
                    showToast('⚠️ Copy manual ya', 3000);
                }
                document.body.removeChild(textarea);
            }

            // =============================================
            // TOMBOL EDIT PESAN
            // =============================================
            btnEdit.addEventListener('click', function() {
                const currentHTML = pesanEl.innerHTML;
                const textarea = document.createElement('textarea');
                textarea.value = currentHTML.replace(/<br\s*\/?>/gi, '\n').replace(/<[^>]+>/g, '');
                textarea.style.width = '100%';
                textarea.style.height = '320px';
                textarea.style.padding = '16px';
                textarea.style.borderRadius = '16px';
                textarea.style.border = '1px solid rgba(255,215,0,0.1)';
                textarea.style.background = 'rgba(255,255,255,0.03)';
                textarea.style.color = '#c5c0d4';
                textarea.style.fontSize = '0.92rem';
                textarea.style.lineHeight = '1.9';
                textarea.style.fontFamily = 'inherit';
                textarea.style.resize = 'vertical';
                textarea.style.outline = 'none';

                const parent = pesanEl.parentNode;
                parent.replaceChild(textarea, pesanEl);

                const originalText = btnEdit.textContent;
                btnEdit.textContent = '💾 simpan';
                btnEdit.style.borderColor = 'rgba(255,215,0,0.3)';

                const saveEdit = function() {
                    const lines = textarea.value.split('\n').filter(line => line.trim() !== '');
                    const formatted = lines.map(line => `<p>${line}</p>`).join('');
                    
                    const newPesanEl = document.createElement('div');
                    newPesanEl.className = 'message-body';
                    newPesanEl.id = 'pesanTampilan';
                    newPesanEl.innerHTML = formatted || '<p>—</p>';
                    
                    textarea.parentNode.replaceChild(newPesanEl, textarea);
                    
                    btnEdit.textContent = originalText;
                    btnEdit.style.borderColor = 'rgba(255,215,0,0.05)';
                    btnEdit.removeEventListener('click', saveEdit);
                    btnEdit.addEventListener('click', editHandler);
                    
                    showToast('✅ Pesan diubah', 2500);
                };

                btnEdit.removeEventListener('click', editHandler);
                btnEdit.addEventListener('click', saveEdit);
            });

            function editHandler() {}

            // =============================================
            // DOUBLE CLICK NAMA (ganti nama)
            // =============================================
            namaEl.addEventListener('dblclick', function() {
                const newName = prompt('Ganti nama:', this.textContent);
                if (newName && newName.trim() !== '') {
                    this.textContent = newName.trim();
                    showToast('👤 Nama diubah', 2000);
                }
            });

            // =============================================
            // RESET (klik kanan)
            // =============================================
            document.addEventListener('contextmenu', function(e) {
                if (e.target.closest('.card')) {
                    e.preventDefault();
                    if (confirm('Reset ke pesan awal?')) {
                        pesanEl.innerHTML = PESAN;
                        isDamaiClicked = false;
                        btnDamai.classList.remove('damai-clicked');
                        btnDamai.innerHTML = '<span class="sparkle">🕊️</span> damai ya ini?';
                        responseBox.classList.remove('show');
                        card.classList.remove('damai');
                        document.body.classList.remove('damai');
                        showToast('↩️ Reset berhasil', 2000);
                    }
                }
            });

            console.log('💌 Website siap. Klik "damai ya ini?" untuk melihat respon.');
        })();
    </script>

</body>
</html>