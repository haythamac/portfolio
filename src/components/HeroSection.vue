<script setup>
import { ArrowDown, Github, Mail } from 'lucide-vue-next';
import Button from '@/components/ui/Button.vue';
</script>

<template>
    <section class="min-h-screen flex flex-col justify-center px-6 py-20 md:py-0">
        <div class="max-w-4xl mx-auto w-full">
            <p class="text-primary font-mono text-sm md:text-base mb-4">
                Hi, I'm
            </p>
            <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold text-foreground mb-4">
                Janssen Uy
            </h1>
            <h2 class="text-2xl md:text-3xl lg:text-4xl font-semibold text-muted-foreground mb-6">
                Full-stack Developer
            </h2>
            <p class="text-lg md:text-xl text-muted-foreground max-w-2xl mb-8 leading-relaxed">
                I build and ship real-world web applications with
                <span class="text-primary font-medium">Laravel</span> &
                <span class="text-primary font-medium">Vue</span>.
                From concept to deployment, I create systems that solve actual problems.
            </p>
            <div class="flex flex-wrap gap-4 mb-12">
                <Button as-child size="lg">
                    <a href="#projects" class="flex row">
                        <ArrowDown class="mr-2 h-4 w-4" />
                        View Projects
                    </a>
                </Button>
                <Button variant="outline" size="lg" as-child>
                    <a href="https://github.com/haythamac" target="_blank" rel="noopener noreferrer" class="flex row">
                        <Github class="mr-2 h-4 w-4" />
                        GitHub
                    </a>
                </Button>
                <Button variant="ghost" size="lg" as-child>
                    <a href="#contact" class="flex row">
                        <Mail class="mr-2 h-4 w-4" />
                        Contact
                    </a>
                </Button>
            </div>
        </div>
    </section>
</template>