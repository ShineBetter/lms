<style>
    :root {
        --success: hsl(149, 74%, 36%);
        --primary: hsl(215, 58%, 44%);
        --accent: hsl(35, 100%, 63%);
        --danger: #dc3545;
        --header: #fff;
        --bg: hsl(0, 0%, 93%);
    }

    #snackbar {
        color: var(--header);
        @if($type == null || $type == 'success')
         background-color: var(--success);
        @elseif($type == 'warning')
          background-color: var(--accent);
        color: #000;
        @elseif($type == 'danger')
          background-color: var(--danger);
        @elseif($type == 'info')
          background-color: var(--primary);
        @endif
        text-align: center;
        border-radius: 3px;
        padding: 16px 32px;
        position: fixed;
        bottom: 30px;
        right: 0;
        width: 50%;
        transform: translate(0%, 100%);
        transition: 0.3s;
        opacity: 0;
        z-index: 9999999;
    }

    #snackbar.show {
        transform: translate(0%, 0%);
        transition: 0.5s;
        opacity: 1;
    }
</style>

<script>
    function createSnackBar() {
        let s = document.createElement('div');
        s.id = 'snackbar';
        s.textContent = '{{$text != null ? $text : 'عملیات موفقیت آمیز بود'}}';
        document.body.append(s);
    }

    // init
    createSnackBar();
    let snackBarTimeout;

    function showSnackBar(e) {
        // e.preventDefault();
        const snackbar = document.querySelector('#snackbar');
        snackbar.classList.add('show');
        // to prevent rapid back and forth movements
        clearTimeout(snackBarTimeout);
        // remove thyself gracefully
        snackBarTimeout = setTimeout(() => {
            snackbar.classList.remove('show');
        }, 5000);
    }

    showSnackBar();
</script>
