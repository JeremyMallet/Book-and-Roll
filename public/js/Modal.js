const Modal = {
    close() {
        $('#modal').fadeOut();
    },
    open(
        header = '<div class="text-xl font-semibold py-5 px-5 border-b">This is header</div>',
        body = '<div class="py-5 px-5">This is body</div>',
        footer = '<div class="py-5 px-5 border-t">This is footer</div>',
    ) {
        this.init();
        $(`#modal .modal-header`).html(header);
        $(`#modal .modal-body`).html(body);
        $(`#modal .modal-footer`).html(footer);
        $(`#modal`).fadeIn();
    },
    init() {
        if (document.getElementById('modal') === null)
            $('body').append(`  <div id="modal" class="fixed flex items-center justify-center inset-0 w-full h-full bg-black/75 p-4 z-50" style="display:none;">
                                    <div class="xl:w-1/2 md:w-2/3 w-full bg-white flex flex-col rounded-lg">
                                        <div class="modal-header"></div>
                                        <div class="modal-body overflow-auto max-h-[60vh]"></div>
                                        <div class="modal-footer"></div>
                                    </div>
                                </div>`);
    },
}