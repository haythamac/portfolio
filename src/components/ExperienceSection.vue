<script setup>
import { Briefcase, Code, GitBranch, Layers } from 'lucide-vue-next';

const experiences = [
    {
        title: "System Design & Architecture",
        icon: Layers,
        description:
            "Designed database schemas, defined relationships, and planned application architecture for scalable full-stack projects.",
    },
    {
        title: "API Development",
        icon: Code,
        description:
            "Built RESTful APIs with proper authentication, validation, and error handling. Implemented CRUD operations with Laravel.",
    },
    {
        title: "Frontend Architecture",
        icon: GitBranch,
        description:
            "Created component-based Vue.js applications with state management, routing, and responsive UI design.",
    },
    {
        title: "Project Ownership",
        icon: Briefcase,
        description:
            "Managed complete project lifecycle from requirements gathering to deployment, making technical decisions and solving problems independently.",
    },
];
</script>

<template>
    <section id="experience" class="py-20 px-6">
        <div class="max-w-6xl mx-auto">
            <div class="mb-12">
                <p class="text-primary font-mono text-sm mb-2">What I've Done</p>
                <h2 class="text-3xl md:text-4xl font-bold text-foreground">
                    Experience
                </h2>
                <p class="text-muted-foreground mt-4 max-w-2xl">
                    My experience comes from building complete projects from scratch,
                    handling everything from initial planning to deployment.
                </p>
            </div>
            <div class="grid md:grid-cols-2 gap-6">
                <div v-for="(exp, index) in experiences" :key="index"
                    class="flex gap-4 p-6 bg-card rounded-lg border border-border hover:border-primary/50 transition-colors">
                    <div class="flex-shrink-0">
                        <div class="p-3 rounded-md bg-primary/10">
                            <component :is="exp.icon" class="h-5 w-5 text-primary" />
                        </div>
                    </div>
                    <div>
                        <h3 class="font-semibold text-foreground mb-2">{{ exp.title }}</h3>
                        <p class="text-sm text-muted-foreground leading-relaxed">
                            {{ exp.description }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>