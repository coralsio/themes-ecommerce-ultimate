<div class="sidebar-toggle position-left"><i class="icon-filter"></i></div>
<aside class="sidebar sidebar-offcanvas position-left"><span class="sidebar-close"><i
                class="icon-x"></i></span>
    <!-- Widget Search-->
    <section class="widget">
        <form class="input-group form-group" action="{{ url('blog') }}" method="get">
            <div class="input-icon">
            <span class="input-group-btn">
                    <button type="submit"><i class="icon-search"></i></button></span>
                <input class="form-control" type="text" name="query" placeholder="Search blog">
            </div>
        </form>
    </section>
    <!-- Widget Categories-->
    <section class="widget widget-categories">
        <h3 class="widget-title">@lang('corals-ecommerce-ultimate::labels.partial.categories')</h3>
        <ul>
            @foreach(\CMS::getCategoriesList(true, 'active') as $category)
                <li>
                    <a href="{{ url('category/'.$category->slug) }}">
                        {{ $category->name }}
                    </a>
                    <span>{{ \CMS::getCategoryPostsCount($category) }}</span>
                </li>
            @endforeach
        </ul>
    </section>
    <!-- Widget Tags-->
    <section class="widget widget-tags">
        <h3 class="widget-title">@lang('corals-ecommerce-ultimate::labels.partial.tag_cloud')</h3>
        @foreach(\CMS::getTagsList(true, 'active') as $tag)
            <a class="tag {{ Request::is('tag/'.$tag->slug)?'active':'' }}" href="{{ url('tag/'.$tag->slug) }}">
                {{ $tag->name }}
            </a>
        @endforeach
    </section>
</aside>
