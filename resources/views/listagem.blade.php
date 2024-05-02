<!---->
<html>
<body>
<h1>Listagem de produtos</h1>
<table>
<?php foreach ($produtos as $p): ?>
<tr>
<td><? = echo $p->prod_nome; ?> </td>
<td><? = echo $p->prod_valor; ?> </td>
<td><? = echo $p->prod_descricao; ?> </td>
<td><? = echo $p->prod_quantidade; ?> </td>
</tr>
<?php endforeach; ?>
</table>

</body>
</html>