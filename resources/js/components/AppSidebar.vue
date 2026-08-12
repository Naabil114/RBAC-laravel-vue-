<script setup lang="ts">
import { LayoutDashboard, Settings, Users } from '@lucide/vue';
import {
    Sidebar,
    SidebarContent,
    SidebarGroup,
    SidebarGroupLabel,
    SidebarGroupContent,
    SidebarMenu,
    SidebarMenuItem,
    SidebarMenuButton,
    SidebarHeader,
    SidebarFooter,
} from '@/components/ui/sidebar';
const menuItems = [
    { title: 'Dashboard', url: '/dashboard', icon: LayoutDashboard },
    { title: 'Users', url: 'users', icon: Users },
    { title: 'Setting', url: 'setting', icon: Settings },
];
</script>

<template>
    <Sidebar>
        <SidebarHeader>
            <div class="px-2 py-1 font-semibold">My Bill</div>
        </SidebarHeader>
        <SidebarContent>
            <SidebarGroup>
                <SidebarGroupLabel>Menu</SidebarGroupLabel>
                <SidebarGroupContent>
                    <SidebarMenu>
                        <SidebarMenuItem v-for="item in menuItems" :key="item.title">
                            <SidebarMenuButton as-child>
                                <a :href="item.url">
                                    <component :is="item.icon" class="size-4"/>
                                    <span>{{ item.title }}</span>
                                </a>
                            </SidebarMenuButton>
                        </SidebarMenuItem>
                    </SidebarMenu>
                </SidebarGroupContent>
            </SidebarGroup>
        </SidebarContent>
        <SidebarFooter>
            <div class="px-2 py-1 text-xs text-muted-foreground">v101010</div>
        </SidebarFooter>
    </Sidebar>
</template>
