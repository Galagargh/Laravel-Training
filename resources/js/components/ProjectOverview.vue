
<template>
    <article class="grid projects phone:grid-cols-2" :class=" 'bg-'+color ">

        <div class="flex mx-8 tablet:mx-12 flex-col projects-summ">
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

        <div class="flex projects-img right-0 phone:right-[440px]">
            <img class="max-w-[100%] phone:max-w-[initial] tablet:w-fit object-cover" :src="image" :alt="title">
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
