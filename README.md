# PHP: Алгоритм бинарный поиск

Поиск значения в массиве с помощью алгоритма <a href="https://developer.donnoval.ru/bin-search/">«Бинарный поиск» / «Двоичный поиск»</a>.

Входной массив должен быть отсортирован. Проверка начинается с середины. После каждой проверки исключается половина значений из проверяемого массива.

Сложность: O(log n)

<pre>
$sampleList = [
    4, 8, 15, 16, 23, 42 
];

foreach( $sampleList as $val )
{
    echo binSearch( $sampleList, $val ) .'&lt;br/&gt;';
}
// &gt; 0
// &gt; 1
// &gt; 2
// &gt; 3
// &gt; 4
// &gt; 5

echo binSearch( $sampleList, -1 ) .'&lt;br/&gt;';
echo binSearch( $sampleList, 50 ) .'&lt;br/&gt;';
// &gt; не найдено
// &gt; не найдено
</pre>
