<script setup>
import { ref } from 'vue';
import { Menu, X } from 'lucide-vue-next';
import Button from '@/components/ui/Button.vue';

const isOpen = ref(false);

const navLinks = [
    { href: '#projects', label: 'Projects' },
    { href: '#skills', label: 'Skills' },
    { href: '#experience', label: 'Experience' },
    { href: '#about', label: 'About' },
    { href: '#contact', label: 'Contact' },
];
</script>

<template>
    <header class="fixed top-0 left-0 right-0 z-50 bg-background/80 backdrop-blur-md border-b border-border">
        <div class="max-w-6xl mx-auto px-6 h-16 flex items-center justify-between">
            <a href="#" class="font-bold text-lg text-foreground">
                Janssen Uy<span class="text-primary">.</span>
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex items-center gap-8">
                <a v-for="link in navLinks" :key="link.href" :href="link.href"
                    class="text-sm text-muted-foreground hover:text-foreground transition-colors">
                    {{ link.label }}
                </a>
            </nav>

            <!-- Mobile Menu Button -->
            <Button variant="ghost" size="icon" class="md:hidden" aria-label="Toggle menu" @click="isOpen = !isOpen">
                <component :is="isOpen ? X : Menu" class="h-5 w-5" />
            </Button>
        </div>

        <!-- Mobile Navigation -->
        <nav v-if="isOpen" class="md:hidden bg-background border-b border-border">
            <div class="px-6 py-4 flex flex-col gap-4">
                <a v-for="link in navLinks" :key="link.href" :href="link.href"
                    class="text-sm text-muted-foreground hover:text-foreground transition-colors"
                    @click="isOpen = false">
                    {{ link.label }}
                </a>
            </div>
        </nav>
    </header>
</template>