<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center bg-gradient-to-br from-[#040004] via-[#020cb9] to-[#010004] border-[#020cb9] border-2 px-6 py-2   rounded-full font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest  ']) }}>
    {{ $slot }}
</button>
