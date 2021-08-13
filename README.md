# GeoDist PHP #
>  GeoDistPHP/1.0 MikeJoDev
Для того, чтобы начать использовать класс geoDist, импортируйте его в свой код:
`require_once 'geodist.php';`
И создайте объект:
`$geo = new geoDist()`
При создании объекта, вы можете передать параметр типа bool, где true -> километры, false -> мили.

### Методы класса ###
distance(lat1, lon1, lat2, lon2) - принимает на вход 4 значения типа float, которые должны являться географическими координатами, определяющие широту и долготу двух точек на карте (latitude и longitude).
getUnit() - возвращает единицу изменения, в которой производится вывод значений. По умолчанию значение 'km'.
__debug() - выводит на экране подробную информацию о значениях, используемых в классе (Обратите внимание, входные значения в distance() и вывод из __debug() могут отличаться, так как на момент записи значений в distance, они преобразуются)