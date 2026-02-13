<script setup>
import { Server, Layout, Database, Wrench } from 'lucide-vue-next';

const skillCategories = [
    {
        title: "Backend",
        icon: Server,
        skills: ["Laravel", "PHP", "REST APIs", "Authentication", "Eloquent ORM"],
    },
    {
        title: "Frontend",
        icon: Layout,
        skills: ["Vue.js", "JavaScript", "Tailwind CSS", "Shadcn", "Responsive Design"],
    },
    {
        title: "Database",
        icon: Database,
        skills: ["MySQL", "Database Design", "Query Optimization", "Migrations"],
    },
    {
        title: "Tools",
        icon: Wrench,
        skills: ["Git", "VS Code", "Postman", "Composer", "npm"],
    },
];
</script>

<template>
    <section id="skills" class="py-20 px-6 bg-card/50">
        <div class="max-w-6xl mx-auto">
            <div class="mb-12">
                <p class="text-primary font-mono text-sm mb-2">What I Work With</p>
                <h2 class="text-3xl md:text-4xl font-bold text-foreground">
                    Tech Stack
                </h2>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div v-for="category in skillCategories" :key="category.title"
                    class="bg-card rounded-lg border border-border p-6 hover:border-primary/50 transition-colors">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="p-2 rounded-md bg-primary/10">
                            <component :is="category.icon" class="h-5 w-5 text-primary" />
                        </div>
                        <h3 class="font-semibold text-foreground">{{ category.title }}</h3>
                    </div>
                    <ul class="space-y-2">
                        <li v-for="skill in category.skills" :key="skill" class="text-sm text-muted-foreground">
                            {{ skill }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</template>