<style>
    .button-add {
        color: #11c773;
        z-index: 999;
        position: relative;
        padding: 16px 32px;
        font-family: Roboto, sans-serif;
        font-weight: 500;
        font-size: 16px;
        line-height: 1;
        margin: 1em 0.5em 0;
        font-family: vazir;
        color: white;
        background: none;
        border: none;
        outline: none;
        overflow: hidden;
        cursor: pointer;
        transition: 0.3s cubic-bezier(0.215, 0.61, 0.355, 1);
    }

    .button-add::before {
        position: absolute;
        content: "";
        top: 0;
        left: 0;
        z-index: -1;
        width: 100%;
        height: 100%;
        background: #11c773;
        border-radius: 5px;
        transition: 0.3s cubic-bezier(0.215, 0.61, 0.355, 1);
    }

    .button-add .text-add, .button-add {
        display: inline-flex;
        vertical-align: middle;
        transition: 0.3s cubic-bezier(0.215, 0.61, 0.355, 1);
    }

    .button-add .text-add {
        transition-delay: 0.05s;
        font-size: 18px;
        color: #fff;
    }

    .button-add .btn-icon {
        margin-left: 8px;
        transition-delay: 0.1s;
    }

    .button-add .add-icon-lms {
        position: absolute;
        top: 50%;
        left: 0;
        right: 0;
        display: flex;
        margin: 0;
        padding: 0;
        list-style-type: none;
        transform: translateY(-50%);
    }

    .button-add .add-icon-lms span {
        flex: 1;
    }

    .button-add .add-icon-lms span a {
        display: inline-flex;
        vertical-align: middle;
        transform: translateY(55px);
        transition: 0.3s cubic-bezier(0.215, 0.61, 0.355, 1);
        text-decoration: none;
        color: white;
        font-size: 25px;
    }

    .button-add .add-icon-lms span a:hover {
        opacity: 0.5;
    }

    .text-add:hover::before {
        transform: scale(1.2);
    }

    .button-add:hover .text-add, .button-add :hover {
        transform: translateY(-55px);
    }

    .button-add:hover .add-icon-lms span a {
        transform: translateY(0);
    }

    .button-add:hover .add-icon-lms span:nth-child(1) a {
        transition-delay: 0.15s;
    }

    .button-add:hover .add-icon-lms span:nth-child(2) a {
        transition-delay: 0.2s;
    }

    .button-add:hover .add-icon-lms span:nth-child(3) a {
        transition-delay: 0.25s;
    }

</style>

@empty($type)
    <button route="{{route("$route")}}" class="button-add">
        <div class="add-lms">
            <span class="text-add">{{ $title ?? 'افزودن' }}</span>
        </div>
        <div class="add-icon-lms">
        <span>
            <a href="#">
                <i class="fas fa-folder-plus"></i>
            </a>
        </span>
        </div>
    </button>
@else
    <input type="submit" value="{{ $title ?? 'افزودن' }}" class="btn {{ $class ?? 'btn-success' }}">
@endempty

@if(!empty($route))
    <script>
        $('.button-add').on('click',function () {
            let route = $(this).attr('route');
            window.location.href = route;
        });
    </script>
@endif