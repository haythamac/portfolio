<script setup>
import { Github, Mail, Linkedin } from 'lucide-vue-next';
import Button from '@/components/ui/Button.vue';

const contacts = [
    {
        name: "GitHub",
        icon: Github,
        href: "https://github.com/haythamac",
        label: "github.com/haythamac",
    },
    {
        name: "Email",
        icon: Mail,
        href: "mailto:janssen.uy.dev@email.com",
        label: "janssen.uy@email.com",
    },
    // {
    //     name: "LinkedIn",
    //     icon: Linkedin,
    //     href: "https://linkedin.com/in/janssenuy",
    //     label: "linkedin.com/in/janssenuy",
    // },
];
</script>

<template>
    <section id="contact" class="py-20 px-6">
        <div class="max-w-4xl mx-auto text-center">
            <div class="mb-8">
                <p class="text-primary font-mono text-sm mb-2">Let's Connect</p>
                <h2 class="text-3xl md:text-4xl font-bold text-foreground">
                    Get In Touch
                </h2>
            </div>
            <p class="text-muted-foreground mb-10 max-w-xl mx-auto">
                Interested in working together or have a project in mind?
                Feel free to reach out. I'm always open to discussing new opportunities.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4 mb-12">
                <Button size="lg" as-child>
                    <a href="mailto:janssen.uy.dev@email.com" class="flex row">
                        <Mail class="mr-2 h-4 w-4" />
                        Send an Email
                    </a>
                </Button>
                <Button variant="outline" size="lg" as-child>
                    <a href="https://github.com/haythamac" class="flex row" target="_blank" rel="noopener noreferrer">
                        <Github class="mr-2 h-4 w-4" />
                        View GitHub
                    </a>
                </Button>
            </div>
            <div class="flex justify-center gap-6">
                <a v-for="contact in contacts" :key="contact.name" :href="contact.href"
                    :target="contact.name !== 'Email' ? '_blank' : undefined"
                    :rel="contact.name !== 'Email' ? 'noopener noreferrer' : undefined"
                    class="p-3 rounded-full bg-card border border-border hover:border-primary hover:text-primary transition-colors"
                    :aria-label="contact.name">
                    <component :is="contact.icon" class="h-5 w-5" />
                </a>
            </div>
        </div>
    </section>
</template>