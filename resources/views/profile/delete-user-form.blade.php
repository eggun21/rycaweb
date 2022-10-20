<x-jet-action-section>
    <x-slot name="title">
        {{ __('Borrar Cuenta') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Borrar tu cuenta permanentemente.') }}
    </x-slot>

    <x-slot name="content">
        <div class="max-w-xl text-sm text-gray-600">
            {{ __('Tu Cuenta sera Borrada, todos los recursos e informacion seran borrados permanentemente. Antes de Borra tu Cuenta, Por Favor Descarga su Data o Información.') }}
        </div>

        <div class="mt-5">
            <x-jet-danger-button wire:click="confirmUserDeletion" wire:loading.attr="disabled">
                {{ __('Borrar Cuenta') }}
            </x-jet-danger-button>
        </div>

        <!-- Delete User Confirmation Modal -->
        <x-jet-dialog-modal wire:model="confirmingUserDeletion">
            <x-slot name="title">
                {{ __('Borrar Cuenta') }}
            </x-slot>

            <x-slot name="content">
                {{ __('Usted esta Seguro de Borrar su Cuenta? Una Vez que la Cuenta sea Borrada , Todos los Recursos e Información Sera Borrada Permanentemente. Por Favor Confirme tu Contraseña.') }}

                <div class="mt-4" x-data="{}" x-on:confirming-delete-user.window="setTimeout(() => $refs.password.focus(), 250)">
                    <x-jet-input type="password" class="mt-1 block w-3/4"
                                placeholder="{{ __('Contraseña') }}"
                                x-ref="password"
                                wire:model.defer="password"
                                wire:keydown.enter="deleteUser" />

                    <x-jet-input-error for="password" class="mt-2" />
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled">
                    {{ __('Cancelar') }}
                </x-jet-secondary-button>

                <x-jet-danger-button class="ml-3" wire:click="deleteUser" wire:loading.attr="disabled">
                    {{ __('Borrar Cuenta') }}
                </x-jet-danger-button>
            </x-slot>
        </x-jet-dialog-modal>
    </x-slot>
</x-jet-action-section>
