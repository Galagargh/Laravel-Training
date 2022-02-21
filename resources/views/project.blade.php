@extends('layout')

@section ('content')

<div class="tablet:max-w-4xl desktop:max-w-xl mx-4 tablet:mx-auto">

    <article class="project flex flex-auto flex-col">
        <h1 class="tablet:text-dh1 p-{{$project->color}}">{!! $project->title !!}</h1>

        <div>
            <p class="intro-para">{!! $project->description !!}</p>
            <br><br>
            <h3 class="p-{{$project->color}}">The Brief</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem beatae consequatur cumque doloremque doloribus eveniet exercitationem incidunt, ipsam itaque laudantium, minima molestiae nobis provident quaerat, quis sequi similique tenetur ullam voluptas voluptatem. Accusamus aliquid animi cupiditate dolores eius esse eveniet harum libero, non obcaecati placeat praesentium quam, qui quisquam quos, rerum similique sint suscipit vitae voluptatibus. Animi architecto consequuntur corporis culpa cupiditate dignissimos dolore eaque earum eius error facilis, in, ipsa iure magnam magni nihil nobis nostrum officia officiis quasi qui repellat sed similique soluta tempore velit voluptate voluptatibus! Architecto asperiores cupiditate doloribus ducimus est eum fugit laborum magni minima, modi nam natus nesciunt nobis nulla quae quaerat repellat unde ut velit, voluptas. A accusamus aliquam amet cumque cupiditate, debitis dolor labore quos! Ad aliquam assumenda at, consequatur dolorem doloremque earum eligendi eos et ex facere facilis fuga hic id iure labore laudantium magni minima nemo nisi non nulla placeat provident sapiente sed soluta tempore temporibus velit voluptate voluptatibus! Consequuntur dolorum ea expedita, explicabo fugit, illum inventore laborum maxime minima, minus nemo nostrum nulla optio pariatur perferendis quae qui sapiente soluta vero voluptatem. Debitis dolorem, ducimus eos, fugit hic inventore ipsum libero maxime natus necessitatibus nihil nulla, perspiciatis porro voluptas?</p>
            <img class="portfolio-image max-w-[100%] bg-{{$project->color}}" src="/{!! $project->featuredImage !!}" alt="{{$project->title}}">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque consequuntur eos fugit nihil voluptatum? Ad asperiores, consequuntur dolor dolorum earum eius error eum, fugiat iusto magni mollitia, nesciunt nisi nostrum porro praesentium sapiente tempore vitae? Animi atque corporis culpa earum facere fuga nisi placeat quidem similique, soluta tempore voluptas voluptates.</p>
        </div>
        <a class="p-{{$project->color}} back" href="/"><< Go back</a>
    </article>

</div>

@endsection



