{{-- Asisten Virtual AI BPRS HIK MCI (Floating Widget) --}}
<div id="mci-ai-widget-root" style="font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;">
    <input type="hidden" id="mci-ai-csrf" value="{{ csrf_token() }}">

    <!-- Trigger Button (Floating Icon) -->
    <button id="mci-ai-toggle-btn" type="button" aria-label="Buka Asisten Virtual BPRS HIK MCI" style="
        position: fixed;
        bottom: 24px;
        right: 24px;
        z-index: 99999;
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 12px 18px 12px 14px;
        background: linear-gradient(135deg, #0f2b5c 0%, #059669 100%);
        color: #ffffff;
        border: none;
        border-radius: 9999px;
        box-shadow: 0 10px 25px -5px rgba(15, 43, 92, 0.4), 0 8px 10px -6px rgba(5, 150, 105, 0.3);
        cursor: pointer;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        outline: none;
    ">
        <div style="
            position: relative;
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        ">
            <!-- Sparkles / Robot Icon -->
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"></path>
            </svg>
            <span style="
                position: absolute;
                top: 0;
                right: 0;
                width: 10px;
                height: 10px;
                background-color: #22c55e;
                border: 2px solid #0f2b5c;
                border-radius: 50%;
            "></span>
        </div>
        <div style="text-align: left; line-height: 1.2;">
            <div style="font-size: 13.5px; font-weight: 700; letter-spacing: -0.2px;">Asisten AI MCI</div>
            <div style="font-size: 11px; opacity: 0.85; font-weight: 400;">Online 24/7 • Tanya Bank & Properti</div>
        </div>
    </button>

    <!-- Chat Window Container -->
    <div id="mci-ai-chat-window" style="
        position: fixed;
        bottom: 88px;
        right: 24px;
        width: 380px;
        max-width: calc(100vw - 32px);
        height: 560px;
        max-height: calc(100vh - 120px);
        background: #ffffff;
        border-radius: 20px;
        box-shadow: 0 20px 45px -10px rgba(15, 23, 42, 0.25), 0 0 0 1px rgba(15, 23, 42, 0.08);
        display: none;
        flex-direction: column;
        overflow: hidden;
        z-index: 99999;
        transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), opacity 0.3s ease;
        transform: translateY(20px) scale(0.95);
        opacity: 0;
    ">
        <!-- Header -->
        <div style="
            background: linear-gradient(135deg, #0f2b5c 0%, #1e3a8a 100%);
            color: #ffffff;
            padding: 16px 18px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 2px solid #059669;
        ">
            <div style="display: flex; align-items: center; gap: 12px;">
                <div style="
                    width: 40px;
                    height: 40px;
                    border-radius: 12px;
                    background: #ffffff;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
                    overflow: hidden;
                ">
                    <img src="{{ asset('frontend/img/logo/logo_mci.png') }}" onerror="this.onerror=null; this.src='{{ asset('frontend/img/logo/head_logo.png') }}';" alt="MCI Logo" style="max-width: 30px; max-height: 30px; object-fit: contain;">
                </div>
                <div>
                    <div style="font-size: 14.5px; font-weight: 700; display: flex; align-items: center; gap: 6px;">
                        Asisten BPRS HIK MCI
                        <span style="font-size: 9.5px; background: #059669; padding: 2px 6px; border-radius: 6px; text-transform: uppercase; font-weight: 800;">AI</span>
                    </div>
                    <div style="font-size: 11px; opacity: 0.85; display: flex; align-items: center; gap: 4px;">
                        <span style="width: 7px; height: 7px; border-radius: 50%; background: #22c55e; display: inline-block;"></span>
                        Online • Resmi Diawasi OJK & LPS
                    </div>
                </div>
            </div>

            <!-- Header Controls -->
            <button id="mci-ai-close-btn" type="button" aria-label="Tutup Chat" style="
                background: rgba(255, 255, 255, 0.12);
                border: none;
                color: #ffffff;
                width: 30px;
                height: 30px;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                cursor: pointer;
                transition: background 0.2s;
            ">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
        </div>

        <!-- Chat Body / Messages Scroll Area -->
        <div id="mci-ai-messages" style="
            flex: 1;
            padding: 16px;
            overflow-y: auto;
            background: #f8fafc;
            display: flex;
            flex-direction: column;
            gap: 12px;
            scroll-behavior: smooth;
        ">
            <!-- Welcome Bot Message -->
            <div style="display: flex; gap: 10px; align-items: flex-start;">
                <div style="
                    width: 30px;
                    height: 30px;
                    border-radius: 50%;
                    background: #0f2b5c;
                    color: #fff;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    font-size: 11px;
                    font-weight: bold;
                    flex-shrink: 0;
                ">MCI</div>
                <div style="
                    background: #ffffff;
                    color: #1e293b;
                    padding: 12px 14px;
                    border-radius: 16px;
                    border-top-left-radius: 4px;
                    font-size: 13px;
                    line-height: 1.5;
                    box-shadow: 0 1px 3px rgba(0,0,0,0.06);
                    border: 1px solid #e2e8f0;
                    max-width: 85%;
                ">
                    Assalamu'alaikum Wr. Wb. Selamat datang di <strong>PT BPRS Harta Insan Karimah MCI</strong>. 🙏<br><br>
                    Saya asisten virtual resmi bank yang siap membantu Bapak/Ibu seputar:
                    <ul style="margin: 6px 0 0 16px; padding: 0;">
                        <li><strong>15 Portofolio Agunan/Properti</strong> (Kavling & Rumah)</li>
                        <li><strong>Tabungan & Deposito Syariah</strong></li>
                        <li><strong>Pembiayaan Griya & UMKM</strong></li>
                        <li><strong>Gedung Kampus Al-Azhar Jakal KM 13,5</strong></li>
                    </ul>
                    Ada yang bisa kami bantu hari ini?
                </div>
            </div>

            <!-- Quick Suggestion Chips -->
            <div id="mci-ai-chips-container" style="
                display: flex;
                flex-wrap: wrap;
                gap: 6px;
                margin-top: 4px;
                padding-left: 40px;
            ">
                <button type="button" class="mci-chip" data-query="Info rumah dan tanah kavling siap bangun" style="
                    background: #ffffff;
                    border: 1px solid #cbd5e1;
                    color: #0f2b5c;
                    padding: 6px 11px;
                    border-radius: 14px;
                    font-size: 11.5px;
                    font-weight: 500;
                    cursor: pointer;
                    transition: all 0.2s;
                ">🏡 Kavling & Rumah</button>
                <button type="button" class="mci-chip" data-query="Bagaimana cara buka Deposito Syariah dan nisbahnya?" style="
                    background: #ffffff;
                    border: 1px solid #cbd5e1;
                    color: #0f2b5c;
                    padding: 6px 11px;
                    border-radius: 14px;
                    font-size: 11.5px;
                    font-weight: 500;
                    cursor: pointer;
                    transition: all 0.2s;
                ">💰 Deposito Syariah</button>
                <button type="button" class="mci-chip" data-query="Syarat pengajuan pembiayaan griya dan modal usaha" style="
                    background: #ffffff;
                    border: 1px solid #cbd5e1;
                    color: #0f2b5c;
                    padding: 6px 11px;
                    border-radius: 14px;
                    font-size: 11.5px;
                    font-weight: 500;
                    cursor: pointer;
                    transition: all 0.2s;
                ">🤝 Pembiayaan Usaha/Griya</button>
                <button type="button" class="mci-chip" data-query="Info penawaran Gedung Komersial Al-Azhar Kaliurang KM 13,5" style="
                    background: #ffffff;
                    border: 1px solid #cbd5e1;
                    color: #0f2b5c;
                    padding: 6px 11px;
                    border-radius: 14px;
                    font-size: 11.5px;
                    font-weight: 500;
                    cursor: pointer;
                    transition: all 0.2s;
                ">🏢 Gedung Al-Azhar</button>
            </div>
        </div>

        <!-- Typing Indicator (Hidden by default) -->
        <div id="mci-ai-typing" style="
            display: none;
            padding: 8px 16px;
            background: #f8fafc;
            gap: 6px;
            align-items: center;
            font-size: 11.5px;
            color: #64748b;
        ">
            <div style="display: flex; gap: 4px; align-items: center;">
                <span class="mci-dot" style="width: 6px; height: 6px; background: #059669; border-radius: 50%; display: inline-block; animation: mciPulse 1.4s infinite ease-in-out both;"></span>
                <span class="mci-dot" style="width: 6px; height: 6px; background: #059669; border-radius: 50%; display: inline-block; animation: mciPulse 1.4s infinite ease-in-out both 0.2s;"></span>
                <span class="mci-dot" style="width: 6px; height: 6px; background: #059669; border-radius: 50%; display: inline-block; animation: mciPulse 1.4s infinite ease-in-out both 0.4s;"></span>
            </div>
            <span>Asisten MCI sedang mengetik jawaban...</span>
        </div>

        <!-- Chat Input Footer -->
        <div style="
            padding: 12px 14px;
            background: #ffffff;
            border-top: 1px solid #e2e8f0;
            display: flex;
            flex-direction: column;
            gap: 6px;
        ">
            <form id="mci-ai-form" style="display: flex; gap: 8px; margin: 0; align-items: center;">
                <input id="mci-ai-input" type="text" placeholder="Ketik pertanyaan seputar produk & aset..." maxlength="500" autocomplete="off" style="
                    flex: 1;
                    padding: 10px 14px;
                    border: 1px solid #cbd5e1;
                    border-radius: 12px;
                    font-size: 13px;
                    outline: none;
                    transition: border-color 0.2s;
                ">
                <button id="mci-ai-send-btn" type="submit" aria-label="Kirim Pesan" style="
                    width: 38px;
                    height: 38px;
                    border-radius: 12px;
                    background: #0f2b5c;
                    color: #ffffff;
                    border: none;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    cursor: pointer;
                    flex-shrink: 0;
                    transition: background 0.2s;
                ">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="22" y1="2" x2="11" y2="13"></line>
                        <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                    </svg>
                </button>
            </form>
            <div style="font-size: 10px; color: #94a3b8; text-align: center;">
                Didukung AI Resmi BPRS HIK MCI • Diawasi OJK & Penjaminan LPS
            </div>
        </div>
    </div>
</div>

<style>
@keyframes mciPulse {
    0%, 80%, 100% { transform: scale(0.6); opacity: 0.4; }
    40% { transform: scale(1); opacity: 1; }
}
#mci-ai-toggle-btn:hover {
    transform: translateY(-2px) scale(1.02);
    box-shadow: 0 14px 30px -5px rgba(15, 43, 92, 0.5);
}
.mci-chip:hover {
    background: #eff6ff !important;
    border-color: #3b82f6 !important;
    color: #1d4ed8 !important;
}
#mci-ai-input:focus {
    border-color: #059669 !important;
    box-shadow: 0 0 0 2px rgba(5, 150, 105, 0.15);
}
#mci-ai-send-btn:hover {
    background: #059669 !important;
}
</style>

<script>
(function() {
    const toggleBtn = document.getElementById('mci-ai-toggle-btn');
    const closeBtn = document.getElementById('mci-ai-close-btn');
    const chatWindow = document.getElementById('mci-ai-chat-window');
    const form = document.getElementById('mci-ai-form');
    const input = document.getElementById('mci-ai-input');
    const messages = document.getElementById('mci-ai-messages');
    const typing = document.getElementById('mci-ai-typing');
    const csrfToken = document.getElementById('mci-ai-csrf') ? document.getElementById('mci-ai-csrf').value : '';

    let isOpen = false;
    let chatHistory = [];

    function toggleChat(open) {
        isOpen = (open !== undefined) ? open : !isOpen;
        if (isOpen) {
            chatWindow.style.display = 'flex';
            setTimeout(() => {
                chatWindow.style.transform = 'translateY(0) scale(1)';
                chatWindow.style.opacity = '1';
                input.focus();
            }, 10);
        } else {
            chatWindow.style.transform = 'translateY(20px) scale(0.95)';
            chatWindow.style.opacity = '0';
            setTimeout(() => {
                chatWindow.style.display = 'none';
            }, 300);
        }
    }

    toggleBtn.addEventListener('click', () => toggleChat());
    closeBtn.addEventListener('click', () => toggleChat(false));

    function appendMessage(text, sender) {
        const row = document.createElement('div');
        row.style.display = 'flex';
        row.style.gap = '10px';
        row.style.alignItems = 'flex-start';
        row.style.justifyContent = (sender === 'user') ? 'flex-end' : 'flex-start';

        if (sender === 'assistant') {
            const avatar = document.createElement('div');
            avatar.style.cssText = 'width:30px;height:30px;border-radius:50%;background:#0f2b5c;color:#fff;display:flex;align-items:center;justify-content:center;font-size:11px;font-weight:bold;flex-shrink:0;';
            avatar.textContent = 'MCI';
            row.appendChild(avatar);
        }

        const bubble = document.createElement('div');
        bubble.style.cssText = (sender === 'user')
            ? 'background: linear-gradient(135deg, #0f2b5c 0%, #1e3a8a 100%); color:#ffffff; padding:10px 14px; border-radius:16px; border-top-right-radius:4px; font-size:13px; line-height:1.45; max-width:82%; word-wrap:break-word;'
            : 'background:#ffffff; color:#1e293b; padding:12px 14px; border-radius:16px; border-top-left-radius:4px; font-size:13px; line-height:1.5; box-shadow:0 1px 3px rgba(0,0,0,0.06); border:1px solid #e2e8f0; max-width:85%; word-wrap:break-word;';

        let formatted = text || '';

        // Parse markdown images: ![alt](url)
        formatted = formatted.replace(/!\[(.*?)\]\((.*?)\)/g, '<div style="margin:10px 0;"><a href="$2" target="_blank" title="Klik untuk memperbesar flyer"><img src="$2" alt="$1" style="width:100%;max-width:270px;border-radius:12px;box-shadow:0 4px 12px rgba(0,0,0,0.15);cursor:pointer;display:block;border:1px solid #cbd5e1;transition:transform 0.2s;" onmouseover="this.style.transform=\'scale(1.02)\'" onmouseout="this.style.transform=\'scale(1)\'"></a><div style="font-size:11px;color:#059669;font-weight:600;margin-top:4px;">🔍 Klik gambar untuk ukuran penuh</div></div>');

        // Parse markdown links: [text](url)
        formatted = formatted.replace(/\[(.*?)\]\((.*?)\)/g, '<a href="$2" target="_blank" style="display:inline-block;background:#059669;color:#ffffff;padding:6px 12px;border-radius:8px;font-size:12px;font-weight:600;text-decoration:none;margin:4px 0;box-shadow:0 2px 5px rgba(5,150,105,0.25);">$1</a>');

        // Parse basic markdown: bold, lists, links
        formatted = formatted
            .replace(/\*\*([\s\S]*?)\*\*/g, '<strong>$1</strong>')
            .replace(/\*([\s\S]*?)\*/g, '<em>$1</em>')
            .replace(/\n\* /g, '<br>• ')
            .replace(/\n- /g, '<br>• ')
            .replace(/\n\n/g, '<br><br>')
            .replace(/\n/g, '<br>');

        // Auto-link phone / wa.me
        formatted = formatted.replace(/(08\d{2}-\d{4}-\d{3,4})/g, '<a href="https://wa.me/62$1" target="_blank" style="color:#059669;font-weight:700;text-decoration:underline;">$1</a>');

        bubble.innerHTML = formatted;
        row.appendChild(bubble);
        messages.appendChild(row);
        messages.scrollTop = messages.scrollHeight;
    }

    async function handleSend(query) {
        const text = query || input.value.trim();
        if (!text) return;

        input.value = '';
        appendMessage(text, 'user');
        
        // Compact history (last 4 turns, max 1500 chars each) to maintain full context naturally
        const outgoingHistory = chatHistory.slice(-4).map(h => ({
            sender: h.sender,
            text: (h.text || '').substring(0, 1500)
        }));

        chatHistory.push({ sender: 'user', text: text });

        // Show typing
        typing.style.display = 'flex';
        messages.scrollTop = messages.scrollHeight;

        try {
            const res = await fetch('/api/ai/chat', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: JSON.stringify({
                    message: text,
                    history: outgoingHistory
                })
            });

            const data = await res.json();
            typing.style.display = 'none';

            if (data && data.reply) {
                appendMessage(data.reply, 'assistant');
                chatHistory.push({ sender: 'assistant', text: data.reply });
            } else {
                appendMessage('Mohon maaf, terjadi kendala teknis sementara. Silakan hubungi kami via WhatsApp di 0858-6472-7859.', 'assistant');
            }
        } catch (err) {
            typing.style.display = 'none';
            appendMessage('Koneksi terputus sejenak. Silakan periksa jaringan Anda atau hubungi kami langsung di (0274) 881159.', 'assistant');
        }
    }

    form.addEventListener('submit', (e) => {
        e.preventDefault();
        handleSend();
    });

    // Handle Quick Chips
    document.querySelectorAll('.mci-chip').forEach(chip => {
        chip.addEventListener('click', function() {
            const query = this.getAttribute('data-query');
            handleSend(query);
        });
    });
})();
</script>
