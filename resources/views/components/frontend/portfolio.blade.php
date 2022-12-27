@props(['skills', 'projects'])
<section id="portfolio" class="section bg-light-primary daark:bg-dark-primary min-h-[140px]">
    <diiv class="container mx-auto">
        <div class="flex flex-col items-center text-center">
            <h2 class="section-title">
                My Latest Work
            </h2>
            <p class="subtitle">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus quaerat impedit minus atque odit
                dolorem dolorum sapiente cumque praesentium quo.
            </p>
        </div>
    </diiv>
    <x-frontend.projects :skills="$skills" :projects="$projects"></x-frontend.projects>
</section>
