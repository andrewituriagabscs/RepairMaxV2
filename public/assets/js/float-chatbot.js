document.addEventListener('DOMContentLoaded', () => {
    const chatToggle = document.getElementById('chat-toggle');
    const chatWindow = document.getElementById('chat-window');
    const closeChat = document.getElementById('close-chat');

    // Safety check: only run if the chatbot is actually on the page
    if (!chatToggle || !chatWindow || !closeChat) return;

    function toggleChat() {
        chatWindow.classList.toggle('hidden');

        // Swap icon when open/closed
        const toggleIcon = chatToggle.querySelector('.material-symbols-outlined');
        if (chatWindow.classList.contains('hidden')) {
            toggleIcon.textContent = 'chat';
            chatToggle.classList.remove('scale-90');
        } else {
            toggleIcon.textContent = 'keyboard_arrow_down';
            chatToggle.classList.add('scale-90');
        }
    }

    chatToggle.addEventListener('click', toggleChat);
    closeChat.addEventListener('click', toggleChat);
});