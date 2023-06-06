# PHP: Алгоритм бинарный поиск

Поиск значения в массиве с помощью алгоритма «Бинарный поиск» / «Двоичный поиск».

Входной массив должен быть отсортирован. Проверка начинается с середины. После каждой проверки исключается половина значений из проверяемого массива.

Сложность: O(log n)

$sampleList = [
    4, 8, 15, 16, 23, 42 
];

foreach( $sampleList as $val )
{
    echo binSearch( $sampleList, $val ) .'<br/>';
}
// > 0
// > 1
// > 2
// > 3
// > 4
// > 5

echo binSearch( $sampleList, -1 ) .'<br/>';
echo binSearch( $sampleList, 50 ) .'<br/>';
// > не найдено
// > не найдено
