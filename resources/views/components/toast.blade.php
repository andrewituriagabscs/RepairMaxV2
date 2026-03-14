{{-- Toast Notification Component --}}
<div x-data="toast()" class="fixed top-4 right-4 z-50">
    <template x-for="notification in notifications" :key="notification.id">
        <div x-show="notification.show"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="transform opacity-0 translate-y-2"
            x-transition:enter-end="transform opacity-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="transform opacity-100"
            x-transition:leave-end="transform opacity-0 translate-y-2"
            :class="notification.type === 'success' ? 'bg-green-50 border-l-4 border-green-500' :
                     notification.type === 'error' ? 'bg-red-50 border-l-4 border-red-500' :
                     notification.type === 'warning' ? 'bg-yellow-50 border-l-4 border-yellow-500' :
                     'bg-blue-50 border-l-4 border-blue-500'"
            class="mb-3 rounded-lg shadow-lg p-4 max-w-sm">
            <div class="flex items-start gap-3">
                <span class="material-symbols-outlined flex-shrink-0"
                    :class="notification.type === 'success' ? 'text-green-600' :
                             notification.type === 'error' ? 'text-red-600' :
                             notification.type === 'warning' ? 'text-yellow-600' :
                             'text-blue-600'">
                    <span x-text="notification.type === 'success' ? 'check_circle' :
                                   notification.type === 'error' ? 'error' :
                                   notification.type === 'warning' ? 'warning' :
                                   'info'"></span>
                </span>
                <div class="flex-1">
                    <p :class="notification.type === 'success' ? 'text-green-800' :
                                notification.type === 'error' ? 'text-red-800' :
                                notification.type === 'warning' ? 'text-yellow-800' :
                                'text-blue-800'"
                        class="text-sm font-medium" x-text="notification.message"></p>
                </div>
                <button @click="removeNotification(notification.id)"
                    class="text-gray-400 hover:text-gray-600 transition-colors">
                    <span class="material-symbols-outlined text-lg">close</span>
                </button>
            </div>
        </div>
    </template>
</div>

<script>
    function toast() {
        return {
            notifications: [],
            nextId: 1,
            show(message, type = 'info', duration = 4000) {
                const id = this.nextId++;
                const notification = { id, message, type, show: true };
                this.notifications.push(notification);

                if (duration > 0) {
                    setTimeout(() => {
                        this.removeNotification(id);
                    }, duration);
                }
            },
            removeNotification(id) {
                const notification = this.notifications.find(n => n.id === id);
                if (notification) {
                    notification.show = false;
                    setTimeout(() => {
                        this.notifications = this.notifications.filter(n => n.id !== id);
                    }, 300);
                }
            }
        }
    }
</script>
