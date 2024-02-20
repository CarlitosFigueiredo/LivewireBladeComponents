<x-layouts.app>
    <div class="grid gap-8">
        <div class="grid gap-4">
            <h2 class="text-5xl font-bold">Money Input</h2>

            <x-separator />

            <x-input.money placeholder="0.00" class="!border-red-500" />
        </div>

        <div class="grid gap-4">

            <h2 class="text-5xl font-bold">Sepparator</h2>

            <x-separator />

            <div class="flex gap-4">
                <div>Home</div>

                <x-separator vertical />

                <div>About</div>

                <x-separator vertical />

                <div>Team</div>
            </div>
        </div>

        <div class="grid gap-4">

            <h2 class="text-5xl font-bold">Card</h2>

            <x-separator />

            <div class="flex gap-4">

                {{-- Card --}}
                <x-card heading="Skateboards" slim>
                    <p>Shop our line of custom-made skate decks. Each deck is hand-crafted form lumber grown in Loompa land.</p>

                    <x-card.footer>

                        <button class="rounded-lg bg-gray-300 hover:bg-gray-400/50 py-1.5 px-6 flex-grow">Shop now</button>
                        <button class="rounded-lg bg-gray-300 hover:bg-gray-400/50 py-1.5 px-6 flex-grow">Shop later</button>
                    </x-card.footer>
                </x-card>
            </div>
        </div>
    </div>
</x-layouts.app>
