<x-mazer-sidebar :href="route('dashboard')" logo="asset('static/images/logo/logo.png')">
    <x-mazer-sidebar-item icon="bi bi-grid-fill" :link="route('dashboard')" name="Dashboard" />
    <x-mazer-sidebar-item icon="bi bi-stack" :link="route('dashboard')" name="Components">
        <x-mazer-sidebar-subitem :link="route('dashboard')" name="Accordion" :active="false"/>
    </x-mazer-sidebar-item>
</x-mazer-sidebar>
