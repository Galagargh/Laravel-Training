
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

    </article>
</template>

<script>
    export default{
        props: {
            color: String,
            slug: String,
            title: String,
            excerpt: String,
            image: String
        }
    }
</script>
