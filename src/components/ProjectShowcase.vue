<script setup>
import { ExternalLink, Github, Database, Server, Layout, Code2 } from 'lucide-vue-next';
import Button from '@/components/ui/button.vue';
import Badge from '@/components/ui/badge.vue';

const projects = [
    {
        title: "Mileage Calculator",
        image: "/images/mileage-calculator.png",
        description: "A simple mileage calculator for a game called Legend of Ymir. It allows users to input their deposits and calculates the total mileage earned based on the game's mechanics. Built with Vue.js, it features a simple design and calculations.",
        techStack: [
            { name: "Vue.js", icon: Layout },
        ],
        features: [
            "User input for deposits and mileage calculation",
            "Default results based on game mechanics",
            "Can customize mileage rates and days",
            "Simple and intuitive user interface",
            "No backend, purely frontend application",
            "Error handling for invalid inputs",
        ],
        demoLink: "https://ymir-mileage.vercel.app/",
        githubLink: "https://github.com/haythamac/ymir-mileage-calculator",
    },
    {
        title: "Guild Management System",
        image: "/images/paragon.png",
        description: "A comprehensive guild management system designed for online gaming communities. This full-stack application allows guild leaders to manage members, events, and communications effectively. Built with Laravel for the backend and Vue.js for the frontend, it offers a seamless user experience.",
        techStack: [
            { name: "Laravel", icon: Server },
            { name: "Vue.js", icon: Layout },
            { name: "MySQL", icon: Database },
            { name: "REST API", icon: Code2 },
        ],
        features: [
            "Member management with roles and permissions",
            "Raffle system for event participation",
            "Item Distribution tracking and management",
            "Responsive design for mobile and desktop",
        ],
        demoLink: "#",
        githubLink: "https://github.com/haythamac/paragon-fe",
    },
];
</script>

<template>
    <section id="projects" class="py-20 px-6">
        <div class="max-w-6xl mx-auto">
            <div class="mb-12">
                <p class="text-primary font-mono text-sm mb-2">Featured Work</p>
                <h2 class="text-3xl md:text-4xl font-bold text-foreground">
                    Project Showcase
                </h2>
            </div>

            <!-- Loop through projects -->
            <div v-for="(project, index) in projects" :key="project.title"
                class="bg-card rounded-lg border border-border overflow-hidden shadow-lg mb-8 last:mb-0">
                <div class="grid lg:grid-cols-2 gap-0">
                    <!-- Project Preview -->
                    <div class="bg-secondary/10 p-8 flex items-center justify-center min-h-[300px] lg:min-h-[400px]">
                        <!-- Show image if available -->
                        <img v-if="project.image" :src="project.image" :alt="project.title"
                            class="w-full h-full object-cover rounded-lg shadow-xl" />
                        <!-- Show default mockup if no image -->
                        <div v-else class="w-full max-w-md">
                            <div class="bg-card rounded-lg shadow-xl border border-border overflow-hidden">
                                <div class="h-6 bg-muted flex items-center px-3 gap-1.5">
                                    <div class="w-2.5 h-2.5 rounded-full bg-destructive/60"></div>
                                    <div class="w-2.5 h-2.5 rounded-full bg-chart-1/60"></div>
                                    <div class="w-2.5 h-2.5 rounded-full bg-primary/60"></div>
                                </div>
                                <div class="p-4 space-y-3">
                                    <div class="h-4 bg-muted rounded w-3/4"></div>
                                    <div class="h-3 bg-muted/60 rounded w-full"></div>
                                    <div class="h-3 bg-muted/60 rounded w-5/6"></div>
                                    <div class="grid grid-cols-3 gap-2 mt-4">
                                        <div class="h-16 bg-primary/20 rounded"></div>
                                        <div class="h-16 bg-primary/20 rounded"></div>
                                        <div class="h-16 bg-primary/20 rounded"></div>
                                    </div>
                                    <div class="h-20 bg-muted/40 rounded mt-4"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project Details -->
                    <div class="p-8 lg:p-10">
                        <div class="flex flex-wrap gap-2 mb-4">
                            <Badge v-for="tech in project.techStack" :key="tech.name" variant="secondary"
                                class="gap-1.5">
                                <component :is="tech.icon" class="h-3 w-3" />
                                {{ tech.name }}
                            </Badge>
                        </div>

                        <h3 class="text-2xl md:text-3xl font-bold text-foreground mb-4">
                            {{ project.title }}
                        </h3>

                        <p class="text-muted-foreground mb-6 leading-relaxed">
                            {{ project.description }}
                        </p>

                        <div class="mb-8">
                            <h4 class="font-semibold text-foreground mb-3">Key Features</h4>
                            <ul class="grid gap-2">
                                <li v-for="(feature, featureIndex) in project.features" :key="featureIndex"
                                    class="flex items-start gap-2 text-sm text-muted-foreground">
                                    <span class="text-primary mt-1">▹</span>
                                    {{ feature }}
                                </li>
                            </ul>
                        </div>

                        <div class="flex flex-wrap gap-3">
                            <Button as-child>
                                <a :href="project.demoLink" target="_blank" rel="noopener noreferrer" class="flex row">
                                    <ExternalLink class="mr-2 h-4 w-4" />
                                    Live Demo
                                </a>
                            </Button>
                            <Button variant="outline" as-child>
                                <a :href="project.githubLink" target="_blank" rel="noopener noreferrer" class="flex row">
                                    <Github class="mr-2 h-4 w-4" />
                                    Source Code
                                </a>
                            </Button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>