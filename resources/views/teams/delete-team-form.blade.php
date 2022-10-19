<x-jet-action-section>
    <x-slot name="title">
        {{ __('Borrar Grupo') }}
    </x-slot>

    <x-slot name="description">
        {{ __('El grupo sera borrado permanentemente.') }}
    </x-slot>

    <x-slot name="content">
        <div class="max-w-xl text-sm text-gray-600">
            {{ __('de ser borrado un grupo se perdera irremediablemnte la informacion de dicho grupo. Antes de Borrar, por favor descargue la data e información registrada.') }}
        </div>

        <div class="mt-5">
            <x-jet-danger-button wire:click="$toggle('confirmingTeamDeletion')" wire:loading.attr="disabled">
                {{ __('Borrado de Grupo') }}
            </x-jet-danger-button>
        </div>

        <!-- Delete Team Confirmation Modal -->
        <x-jet-confirmation-modal wire:model="confirmingTeamDeletion">
            <x-slot name="title">
                {{ __('Borrar Grupo') }}
            </x-slot>

            <x-slot name="content">
                {{ __('Usted esta seguro de querer borrar este grupo? todos los recursos e información seran borrados irremediablemente.') }}
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('confirmingTeamDeletion')" wire:loading.attr="disabled">
                    {{ __('Cancelar') }}
                </x-jet-secondary-button>

                <x-jet-danger-button class="ml-3" wire:click="deleteTeam" wire:loading.attr="disabled">
                    {{ __('Borrar Grupo') }}
                </x-jet-danger-button>
            </x-slot>
        </x-jet-confirmation-modal>
    </x-slot>
</x-jet-action-section>
