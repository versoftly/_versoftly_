# VERSOFT

API RESTFUL PHP - MYSQL

<pre>

Acotaciones para las consultas get

, = separador para las columnas cuando se quiere hacer consultas de mas de una columna
| = lo mismo pero para los valores de dichas columnas
& = sirve para unir variables

Variables get :

select
linkTo
equalTo
orderBy
orderMode
startAt
endAt

utiliza el endpoint https://versoft.website/cursos

para hacer tus test de los filtros y el ordenamiento de la informacion

ejemplo de una consulta sencilla :

http://www.versoft.website/cursos?select=*

ejemplo de una consulta ordenando los datos de forma descendente:

http://www.versoft.website/cursos?select=*&orderBy=id&orderMode=DESC

ejemplo de una consulta para limitar datos :

https://versoft.website/cursos?select=*&startAt=0&endAt=1

ejemplo limitar y ordenar :

https://www.versoft.website/cursos?select=*,estatus&orderBy=id&orderMode=DESC&startAt=0&endAt=2

para mas informacion al respecto mantente 
al pendiente de las actualizaciones en github
y una vez que veas cambios ahi puedes ir a
la pagina de la api e iniciar con tus pruebas


</pre>