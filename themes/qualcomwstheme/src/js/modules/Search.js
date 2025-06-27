class Search {

    /**
     * Constructor de la clase
     * Inicializa propiedades y configura event listeners
     */
    constructor() {
        // Elementos del DOM
        this.searchTrigger = document.querySelector('.js-search-trigger');
        this.searchOverlay = document.getElementById('search-overlay');
        this.closeButton = document.getElementById('close-search');
        this.searchInput = document.getElementById('search-input');
        this.resultsDiv = document.getElementById('search-overlay__results');
        this.typingTimer;
        this.isSpinnerVisible = false;
        this.previousValue;


        // Estado del overlay
        this.isOpen = false;

        // Inicializar la clase
        this.init();
    }

    /**
     * Inicializa la clase y verifica que todos los elementos necesarios existan
     * @return {boolean} - Indica si la inicialización fue exitosa
     */
    init() {
        if (this.canInitialize()) {
            this.bindEvents();
            return true;
        }
        console.error('No se pudo inicializar el search overlay: Faltan elementos requeridos');
        return false;
    }

    /**
     * Verifica que los elementos DOM necesarios existan
     * @return {boolean} - Verdadero si todos los elementos necesarios existen
     */
    canInitialize() {
        return this.searchTrigger && this.searchOverlay;
    }

    /**
     * Configura todos los event listeners
     */
    bindEvents() {
        // Event listener para el botón de búsqueda
        this.searchTrigger.addEventListener('click', this.openOverlay.bind(this));

        // Event listener para el botón de cierre
        if (this.closeButton) {
            this.closeButton.addEventListener('click', this.closeOverlay.bind(this));
        }

        // Event listener para la tecla ESC y Ctrl+K
        document.addEventListener('keydown', this.handleKeyPress.bind(this));

        // Event listener para cerrar al hacer clic fuera del contenido
        this.searchOverlay.addEventListener('click', this.handleOverlayClick.bind(this));

        //Event listener para manejar la logica de escritura en el input
        this.searchInput.addEventListener('input', this.searchInputLogic.bind(this))

    }

    /**
     * Abre el overlay de búsqueda
     * @param {Event} e - Evento del clic (opcional)
     */
    openOverlay(e) {
        if (e) {
            e.preventDefault();
        }

        // Prevenir scroll en el body
        document.body.classList.add('overflow-hidden');

        // Mostrar overlay con animación
        this.searchOverlay.classList.remove('scale-0', 'opacity-0');
        this.searchOverlay.classList.add('scale-100', 'opacity-100');

        // Actualizar estado
        this.isOpen = true;

        // Focus en el input después de un pequeño delay para la animación
        setTimeout(() => {
            if (this.searchInput) {
                this.searchInput.focus();
            }
        }, 300);
    }

    /**
     * Cierra el overlay de búsqueda
     */
    closeOverlay() {
        // Permitir scroll en el body nuevamente
        document.body.classList.remove('overflow-hidden');

        // Ocultar overlay con animación
        this.searchOverlay.classList.remove('scale-100', 'opacity-100');
        this.searchOverlay.classList.add('scale-0', 'opacity-0');

        // Actualizar estado
        this.isOpen = false;
    }

    /**
     * Maneja eventos de teclado (ESC para cerrar, Ctrl+K para abrir)
     * @param {KeyboardEvent} e - Evento de teclado
     */
    handleKeyPress(e) {
        // Cerrar el overlay si ESC es presionado y el overlay está abierto
        if (e.key === 'Escape' && this.isOpen) {
            this.closeOverlay();
        }

        // Abrir con Ctrl+K o Cmd+K (en Mac)
        if ((e.ctrlKey || e.metaKey) && e.key.toLowerCase() === 'k') {
            e.preventDefault(); // Previene acciones predeterminadas del navegador

            if (!this.isOpen) {
                this.openOverlay();
            } else {
                this.closeOverlay();
            }
        }
    }

    /**
     * Maneja clics en el overlay para cerrar al hacer clic fuera del contenido
     * @param {MouseEvent} e - Evento del clic
     */
    handleOverlayClick(e) {
        // Cerrar solo si el clic fue directamente en el overlay (no en su contenido)
        if (e.target === this.searchOverlay) {
            this.closeOverlay();
        }
    }

    // Método para recibir los datos para la búsqueda
    searchInputLogic(e) {

        let inputValue = this.searchInput.value.trim();
        if (inputValue != 0) {
            clearTimeout(this.typingTimer); // garantizamos que el temporazador contenga el tiempo deseado
            if (!this.isSpinnerVisible) {
                this.resultsDiv.innerHTML = `<div class="spinner-loader"></div>`;
                this.isSpinnerVisible = true;
            }
            this.typingTimer = setTimeout(this.getResults.bind(this), 1000);
        }


        this.previousValue = this.searchInput.value;

    }

    //Método que muestra los resultados
    getResults() {
        this.isSpinnerVisible = false;
        this.resultsDiv.innerHTML = 'ok';

    }
}

export default Search;