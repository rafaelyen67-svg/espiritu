<x-layout title="Contact Us">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        
        <!-- Contact Info -->
        <div class="space-y-6">
            <div>
                <h1 class="text-4xl font-extrabold text-white tracking-tight">Get in Touch</h1>
                <p class="mt-3 text-slate-400 text-lg">
                    Have questions, feedback, or need support? Drop us a message and we'll get back to you shortly.
                </p>
            </div>

            <div class="space-y-4 pt-2">
                <div class="flex items-center space-x-4 p-4 rounded-2xl bg-slate-900 border border-slate-800">
                    <div class="w-12 h-12 rounded-xl bg-sky-500/10 text-sky-400 flex items-center justify-center font-bold">
                        ✉
                    </div>
                    <div>
                        <p class="text-xs font-semibold uppercase text-slate-500">Email Us</p>
                        <a href="mailto:support@example.com" class="text-slate-200 font-medium hover:text-sky-400 transition">
                            support@example.com
                        </a>
                    </div>
                </div>

                <div class="flex items-center space-x-4 p-4 rounded-2xl bg-slate-900 border border-slate-800">
                    <div class="w-12 h-12 rounded-xl bg-sky-500/10 text-sky-400 flex items-center justify-center font-bold">
                        📞
                    </div>
                    <div>
                        <p class="text-xs font-semibold uppercase text-slate-500">Call Us</p>
                        <a href="tel:+1234567890" class="text-slate-200 font-medium hover:text-sky-400 transition">
                            +1 (234) 567-890
                        </a>
                    </div>
                </div>

                <div class="flex items-center space-x-4 p-4 rounded-2xl bg-slate-900 border border-slate-800">
                    <div class="w-12 h-12 rounded-xl bg-sky-500/10 text-sky-400 flex items-center justify-center font-bold">
                        📍
                    </div>
                    <div>
                        <p class="text-xs font-semibold uppercase text-slate-500">Location</p>
                        <p class="text-slate-200 font-medium">123 Tech Street, Suite 400</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Form Card -->
        <div class="bg-slate-900 border border-slate-800 rounded-3xl p-8 shadow-2xl">
            @if(session('success'))
                <div class="mb-6 p-4 rounded-2xl bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 text-sm font-medium">
                    {{ session('success') }}
                </div>
            @endif

            <form action="/contact" method="POST" class="space-y-5">
                @csrf

                <div>
                    <label for="name" class="block text-sm font-medium text-slate-300 mb-2">Your Name</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" required
                        class="w-full px-4 py-3 bg-slate-950 border border-slate-800 rounded-xl text-white placeholder-slate-500 focus:outline-none focus:border-sky-500 transition @error('name') border-red-500 @enderror"
                        placeholder="John Doe">
                    @error('name')
                        <p class="mt-1 text-xs text-red-400">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-slate-300 mb-2">Email Address</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required
                        class="w-full px-4 py-3 bg-slate-950 border border-slate-800 rounded-xl text-white placeholder-slate-500 focus:outline-none focus:border-sky-500 transition @error('email') border-red-500 @enderror"
                        placeholder="you@example.com">
                    @error('email')
                        <p class="mt-1 text-xs text-red-400">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="message" class="block text-sm font-medium text-slate-300 mb-2">Message</label>
                    <textarea id="message" name="message" rows="4" required
                        class="w-full px-4 py-3 bg-slate-950 border border-slate-800 rounded-xl text-white placeholder-slate-500 focus:outline-none focus:border-sky-500 transition resize-none @error('message') border-red-500 @enderror"
                        placeholder="How can we help you?">{{ old('message') }}</textarea>
                    @error('message')
                        <p class="mt-1 text-xs text-red-400">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit"
                    class="w-full py-3.5 px-6 rounded-xl bg-sky-500 hover:bg-sky-400 text-slate-950 font-bold shadow-lg shadow-sky-500/20 transition transform active:scale-95">
                    Send Message
                </button>
            </form>
        </div>

    </div>
</x-layout>