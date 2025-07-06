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

        // Configuración de la búsqueda
        this.searchConfig = {
            minCharacters: 2,
            delay: 500,
            maxResults: 8
        };

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

        // Event listener para manejar la lógica de escritura en el input
        this.searchInput.addEventListener('input', this.searchInputLogic.bind(this));
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
        }, 350);

        // Limpiar resultados anteriores
        this.clearResults();
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

        // Limpiar input y resultados
        setTimeout(() => {
            this.searchInput.value = '';
            this.clearResults();
        }, 300);
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

    /**
     * Maneja la lógica de entrada del usuario en el campo de búsqueda
     * @param {Event} e - Evento de input
     */
    searchInputLogic(e) {
        const inputValue = this.searchInput.value.trim();

        // Limpiar timer anterior
        clearTimeout(this.typingTimer);

        // Si el input está vacío, limpiar resultados
        if (inputValue.length === 0) {
            this.clearResults();
            return;
        }

        // Si no cumple el mínimo de caracteres, no buscar
        if (inputValue.length < this.searchConfig.minCharacters) {
            this.showMessage(`Escribe al menos ${this.searchConfig.minCharacters} caracteres para buscar...`);
            return;
        }

        // Si el valor no cambió, no hacer nueva búsqueda
        if (inputValue === this.previousValue) {
            return;
        }

        // Mostrar spinner si no está visible
        if (!this.isSpinnerVisible) {
            this.showSpinner();
        }

        // Configurar nuevo timer para la búsqueda
        this.typingTimer = setTimeout(() => {
            this.getResults(inputValue);
        }, this.searchConfig.delay);

        this.previousValue = inputValue;
    }

    /**
     * Realiza la búsqueda y obtiene los resultados
     * @param {string} searchTerm - Término de búsqueda
     */
    async getResults(searchTerm) {
        try {
            // Construir URL de la API de WordPress
             const searchUrl = `${qData.root_url}/wp-json/wp/v2/search?search=${encodeURIComponent(searchTerm)}&per_page=${this.searchConfig.maxResults}`;
            // Realizar petición
            const response = await fetch(searchUrl);

            console.log(response);

            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }

            const results = await response.json();

            // Ocultar spinner
            this.hideSpinner();

            // Mostrar resultados
            this.displayResults(results, searchTerm);

        } catch (error) {
            console.error('Error en la búsqueda:', error);
            this.hideSpinner();
            this.showMessage('Error al realizar la búsqueda. Por favor, intenta de nuevo.');
        }
    }

    /**
     * Muestra los resultados de la búsqueda
     * @param {Array} results - Resultados de la búsqueda
     * @param {string} searchTerm - Término buscado
     */
    displayResults(results, searchTerm) {
        if (results.length === 0) {
            this.showMessage(`No se encontraron resultados para "${searchTerm}"`);
            return;
        }

        let html = `
            <div class="mb-4">
                <h3 class="text-white text-lg font-semibold">
                    ${results.length} resultado${results.length !== 1 ? 's' : ''} para "${searchTerm}"
                </h3>
            </div>
            <div class="space-y-4">
        `;

        results.forEach(result => {
            html += `
                <div class="bg-white/10 backdrop-blur-sm rounded-lg p-2 hover:bg-white/20 transition-colors duration-200">
                    <a href="${result.url}" class="block group">
                        <h4 class="text-white font-medium group-hover:text-primary_yellow transition-colors">
                            ${this.highlightSearchTerm(result.title, searchTerm)}
                        </h4>
                        <p class="text-slate-300 text-sm mt-0 hidden">
                            ${result.type === 'post' ? 'Artículo' : 'Página'} 
                        </p>
                        ${result.excerpt ? `
                            <p class="text-slate-400 text-sm mt-2">
                                ${this.highlightSearchTerm(this.stripHtml(result.excerpt), searchTerm)}
                            </p>
                        ` : ''}
                    </a>
                </div>
            `;
        });

        html += `</div>`;

        this.resultsDiv.innerHTML = html;
    }

    /**
     * Resalta el término de búsqueda en el texto
     * @param {string} text - Texto donde resaltar
     * @param {string} searchTerm - Término a resaltar
     * @return {string} - Texto con el término resaltado
     */
    highlightSearchTerm(text, searchTerm) {
        if (!text || !searchTerm) return text;

        const regex = new RegExp(`(${searchTerm})`, 'gi');
        return text.replace(regex, '<mark class="bg-primary_yellow text-black px-1 rounded">$1</mark>');
    }

    /**
     * Elimina etiquetas HTML del texto
     * @param {string} html - Texto con HTML
     * @return {string} - Texto sin HTML
     */
    stripHtml(html) {
        const tmp = document.createElement('div');
        tmp.innerHTML = html;
        return tmp.textContent || tmp.innerText || '';
    }

    /**
     * Muestra el spinner de carga
     */
    showSpinner() {
        this.resultsDiv.innerHTML = `
            <div class="flex justify-center items-center py-8">
                <div class="spinner-loader"></div>
                <span class="text-white ml-3">Buscando...</span>
            </div>
        `;
        this.isSpinnerVisible = true;
    }

    /**
     * Oculta el spinner de carga
     */
    hideSpinner() {
        this.isSpinnerVisible = false;
    }

    /**
     * Muestra un mensaje en el área de resultados
     * @param {string} message - Mensaje a mostrar
     */
    showMessage(message) {
        this.resultsDiv.innerHTML = `
            <div class="text-center py-8">
                <p class="text-slate-300">${message}</p>
            </div>
        `;
    }

    /**
     * Limpia el área de resultados
     */
    clearResults() {
        this.resultsDiv.innerHTML = '';
        this.isSpinnerVisible = false;
    }
}

export default Search;