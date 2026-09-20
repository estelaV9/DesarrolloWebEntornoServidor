# Tema 1: Seleccion de Arquitecturas y Herramientas
 
## 1. Arquitecturas web: introducción 
Las arquitecturas web describen la relación y funciones entre los elementos que participan en el intercambio de información a través de Internet. La gran mayoría son de tipo **cliente-servidor** (comunicación asimétrica donde uno ofrece servicios y el otro los consume), aunque también existen otras como **P2P (Peer to Peer)**
 
### 1.1 Arquitectura cliente-servidor
Reparte tareas entre **servidores** (proveedores de recursos/servicios) y **clientes** (solicitantes/consumidores). Normalmente se comunican por red, aunque pueden residir en la misma máquina (habitual en desarrollo)
 
**Funcionamiento básico:**
1. El cliente (navegador, app nativa u otro servidor) solicita un servicio indicando su URL
2. El servidor recibe la petición vía HTTP, la procesa con su lógica de negocio y devuelve una respuesta (HTML, CSS, XML, JSON, multimedia, JavaScript...)
3. El cliente recibe e interpreta la respuesta, representándola al usuario

**Ventajas:**
- **Centralización del control**: accesos, recursos e integridad de datos gestionados por el servidor
- **Escalabilidad**: cliente y servidor pueden ampliarse por separado
- **Portabilidad**: al ejecutarse en el navegador, la app se independiza del sistema operativo
- **Fácil mantenimiento**: al distribuir funciones entre equipos independientes, se puede reparar/actualizar un servidor sin apenas afectar a los clientes (**encapsulación**)

**Desventajas:**
- Congestión de tráfico ante peticiones simultáneas masivas
- Si el servidor cae, los clientes se quedan sin servicio (recursos no distribuidos)
- El software/hardware del servidor suele ser específico y costoso
> Estas desventajas se mitigan cuando los recursos están replicados/distribuidos (escalado horizontal y vertical)
 
### 1.2 Modelo de programación cliente/servidor
La **Web** es un conjunto de recursos interconectados accesible globalmente, posible gracias a componentes físicos (hubs, routers...), protocolos (TCP, IP, HTTP, FTP, SMTP...) y el DNS. El modelo cliente/servidor se basa en el intercambio de mensajes: el **cliente** consume servicios y el **servidor** los provee, iniciando el cliente el intercambio
 
**Clasificación de los modelos cliente/servidor:**
| Criterio | Tipos |
|---|---|
| **Tamaño de los componentes** | **Fat Client / Thin Server** (más carga en el cliente) vs. **Fat Server / Thin Client** (más carga en el servidor) |
| **Naturaleza del servicio** | Servidores de ficheros, de bases de datos, de transacciones, de objetos, o servidores web (clientes simples + HTTP) |
| **Reparto de funciones** | Modelo en **2 capas** (negocio y datos agrupados) o en **3 capas** (negocio y datos separados) |
 
<br>
 
## 2. Modelo actual de arquitectura web
Separa los componentes y recursos de una aplicación en capas, cada una centrada en un aspecto del sistema:
| Capa | Función | Ubicación habitual |
|---|---|---|
| **Presentación** | Interfaz gráfica que ve el usuario; formatea la información y captura sus acciones | Cliente |
| **Negocio (lógica)** | Gestiona las funcionalidades esperadas; recibe peticiones y envía respuestas tras procesar la información | Cliente o servidor |
| **Persistencia (datos)** | Almacena y gestiona el acceso a los datos, normalmente mediante gestores de bases de datos | Servidor |
 
<br>
 
## 3. Estructura y recursos de una aplicación web
Una **plataforma web** consta de cuatro componentes básicos:
1. **Sistema operativo**: base del funcionamiento del equipo que aloja las páginas
2. **Servidor web**: escucha y gestiona peticiones HTTP; en páginas estáticas sirve el archivo directamente, en dinámicas delega en un servidor de aplicaciones (los más populares: Apache y Nginx)
3. **Gestor de bases de datos**: almacena registros de datos relacionados
4. **Lenguaje de programación**: controla la lógica de las aplicaciones del sitio

**Principales plataformas:** 
| Plataforma | Componentes | Tipo |
|---|---|---|
| **LAMP** | Linux + Apache (o Nginx) + MySQL + PHP (o Perl/Python) | Software libre |
| **WISA** | Windows + IIS + SQL Server + ASP/ASP.NET | Software propietario |
| **WAMP** | Windows + Apache + MySQL + PHP | Uso típico: desarrollo local |
| **WIMP** | Windows + IIS + MySQL + PHP | — |
 
> Existen otras combinaciones con distintos SO (Unix, macOS, Solaris), servidores (Lighttpd, LiteSpeed) o bases de datos (PostgreSQL)
 
<br>
 
## 4. Generación dinámica de páginas web
Según la capacidad de comunicación con el usuario, las aplicaciones web se clasifican en:
| Tipo | Descripción | Tecnologías |
|---|---|---|
| **Estáticas** | La página no genera ninguna acción ni respuesta del servidor al interactuar | HTML |
| **Dinámicas (DHTML)** | La interacción cambia la visualización (formato, elementos nuevos...) sin diálogo real con el servidor | HTML, CSS, JavaScript (y variantes: VBScript, Flash...) |
| **Interactivas** | La interacción genera un diálogo cliente-servidor; es el tipo más usado actualmente | **Cliente**: formularios HTML, ActiveX, Flash, applets, AJAX. **Servidor**: PHP, ASP, JSP, CGI/SSI, Servlets, ASP.NET |
 
<br>
 
## 5. Modelos de programación
Se refiere a cómo se organizan y distribuyen los ficheros con la lógica de negocio de una aplicación web. Hay dos modelos principales:
 
### 5.1 Modelo-Vista-Controlador (MVC)
Separa datos/lógica de negocio, interfaz de usuario y gestión de eventos, facilitando la reutilización de código y el mantenimiento:
- **Modelo**: gestiona el acceso a la información (normalmente en BBDD), accesible vía el controlador
- **Controlador**: responde a las acciones del usuario, pide datos al modelo y se los envía a la vista
- **Vista**: presenta visualmente los datos al usuario, que interactúa de nuevo con el controlador
En este modelo, el **servidor** lleva el peso del procesamiento y la representación. Cada petición implica **refrescar toda la pantalla** (aplicación no reactiva), aumentando los tiempos de respuesta al recargar datos y ficheros no cacheados
 
### 5.2 Aplicaciones basadas en servicios REST
La interacción con el usuario se delega en una aplicación (web, móvil o escritorio) instalada en el cliente. El **servidor** solo implementa la lógica de negocio, gestiona datos y envía la información solicitada, normalmente en **JSON**
- **API**: conjunto de servicios web mediante los que el cliente interactúa con el servidor, identificados por **endpoints** (URLs del lado servidor)
- A diferencia de MVC, cada petición **no refresca la página completa**, solo la parte necesaria de la interfaz — un comportamiento similar al de las apps móviles
- **SPA (Single Page Application)**: un único HTML simple + JavaScript que actualiza la interfaz con cada petición; tras la carga inicial, solo se intercambia JSON con el servidor
- Los servicios REST también pueden alimentar a otros sistemas, no solo a clientes (aplicaciones híbridas: envío de emails, servicios de IA, etc)

<br>
 
## 6. Lenguajes de programación
 
### 6.1 Entorno servidor
| Lenguaje | Características | Frameworks destacados |
|---|---|---|
| **PHP** | Lenguaje de propósito general, muy adaptado al desarrollo web (última versión: PHP7) | CodeIgniter, Laravel, Symfony |
| **Python** | Interpretado, de alto nivel, prioriza la legibilidad; usado también en ciberseguridad e IA | Django, Flask |
| **Ruby** | Interpretado y orientado a objetos | Ruby on Rails |
| **Java** | Rápido, seguro y fiable; usado en apps móviles, software empresarial y macrodatos | Spring, Hibernate |
 
### 6.2 Entorno cliente
| Lenguaje | Características |
|---|---|
| **JavaScript** | Lenguaje por excelencia del entorno cliente (y también usado en servidor); frameworks reactivos: React.js, Vue.js, Angular, Svelte |
| **TypeScript** | Libre y de código abierto (Microsoft); superconjunto de JavaScript con tipado estático y clases; soportado por los mismos frameworks que JS |
| **Python** | Poco popular en cliente, pero ejecutable en el navegador mediante proyectos como PyScript |
 
> No existe un "mejor lenguaje" universal: cada uno tiene puntos fuertes según el contexto; conviene mantener una mentalidad abierta y dominar bien los fundamentos de programación
 
<br>
 
## 7. Integración con los servidores web
El servidor web provee contenido estático a partir de peticiones formales (con formato específico) del cliente, normalmente mediante una **URL** que incluye el protocolo (HTTP, FTP...)
**Métodos de petición:**
- **GET**: solicita al servidor la información identificada en la URL (documentos HTML, imágenes, datos)
- **POST**: se usa para enviar información al servidor
Para aplicaciones interactivas más complejas, se recurre a tecnologías y módulos específicos del servidor que amplían su potencia y agilizan el proceso
 
<br>
 
## 8. Herramientas de programación (IDEs)
El ecosistema de herramientas web es amplio y cambia constantemente. Algunas referencias habituales:
- **IDEs/editores**: Visual Studio Code (multilenguaje), PyCharm (Python)
- **Consulta de dudas**: StackOverflow
- **Documentación de lenguajes/marcado**: W3CSchools
**Otras áreas tecnológicas del ecosistema web** (en constante evolución): virtualización, servidores web, servidores de aplicaciones, contenedores de servlets, gestores de BBDD, frameworks de servidor (backend) y frameworks de cliente (frontend)
 
<br>
 
## 9. Navegadores: tipos y características
El navegador es el entorno de ejecución del lado cliente. Es un software complejo y en constante evolución, con opciones respaldadas por distintas motivaciones (empresas multinacionales, comunidades de desarrolladores) y principios de desarrollo diferentes
 
Aspectos habituales de comparación entre navegadores: soporte de etiquetado HTML y CSS, rendimiento, velocidad y seguridad
 

<br>

---
>_Estela de Vega Martín | IES Ribera de Castilla 26/27._
