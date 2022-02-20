
<template>
    <article class="grid grid-cols-2 grid-rows-3 projects" :class=" 'bg-'+color ">

        <div class="flex flex-col projects-summ">
            <h1 class="white tablet:text-dh1">
                <a :href="/projects/+slug">
                    {{ title }}
                </a>
            </h1>
            <div class="excerpt">
                <p class="white">{{ excerpt }}</p>
            </div>
            <div class="button">
                <a class="btn btn-primary btn-lg" :href="/projects/+slug">View Project</a>
            </div>
        </div>

        <div class="flex projects-img">
            <img class="" :src="image" :alt="title">
        </div>

        <a v-on:click="nextProject(id)">
            <button class="nextProj bg-white position-absolute rounded-circle right-50">
                <span>></span>
            </button>
        </a>

    </article>
</template>

<script>
    export default{
        props: {
            id: String,
            color: String,
            slug: String,
            title: String,
            excerpt: String,
            image: String
        },
        methods: {
            nextProject($var) {
                this.id++;
                console.log(this.id);
                this.$emit('next-project', this.id)
            },
            prevProject($var) {
                this.id--;
                this.$emit('prev-project', this.id)
            }
        }
    }
</script>
