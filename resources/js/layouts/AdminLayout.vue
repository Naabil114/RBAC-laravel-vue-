<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { Palette } from '@lucide/vue';
import AppSidebar from '@/components/AppSidebar.vue';
import Breadcrumbs from '@/components/Breadcrumbs.vue';
import { Avatar, AvatarFallback } from '@/components/ui/avatar';
import {
    DropdownMenu,
    DropdownMenuContent,
    DropdownMenuItem,
    DropdownMenuTrigger,
} from '@/components/ui/dropdown-menu';
import { Separator } from '@/components/ui/separator';
import {
    SidebarInset,
    SidebarProvider,
    SidebarTrigger,
} from '@/components/ui/sidebar';
import { edit as editAppearance } from '@/routes/appearance';
import type { BreadcrumbItem } from '@/types';

const { breadcrumbs = [] } = defineProps<{
    breadcrumbs?: BreadcrumbItem[];
}>();
</script>

<template>
    <SidebarProvider>
        <AppSidebar />
        <SidebarInset>
            <header
                class="flex h-16 shrink-0 items-center justify-between border-b px-4"
            >
                <div class="flex items-center gap-2">
                    <SidebarTrigger />
                    <Separator orientation="vertical" class="h-4" />
                    <Breadcrumbs
                        v-if="breadcrumbs.length > 0"
                        :breadcrumbs="breadcrumbs"
                    />
                </div>

                <DropdownMenu>
                    <DropdownMenuTrigger as-child>
                        <Avatar class="h-8 w-8 cursor-pointer rounded-lg">
                            <AvatarFallback class="rounded-lg">
                                AD
                            </AvatarFallback>
                        </Avatar>
                    </DropdownMenuTrigger>

                    <DropdownMenuContent align="end" class="w-48">
                        <DropdownMenuItem as-child>
                            <Link
                                class="block w-full cursor-pointer"
                                :href="editAppearance()"
                            >
                                <Palette class="mr-2 h-4 w-4" />
                                Appearance
                            </Link>
                        </DropdownMenuItem>
                    </DropdownMenuContent>
                </DropdownMenu>
            </header>

            <main class="flex-1 p-4">
                <slot />
            </main>

            <footer
                class="border-t px-4 py-3 text-center text-xs text-muted-foreground"
            >
                &copy; {{ new Date().getFullYear() }} My Admin allin
            </footer>
        </SidebarInset>
    </SidebarProvider>
</template>
