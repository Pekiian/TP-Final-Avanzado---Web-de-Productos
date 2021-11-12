CREATE DATABASE `tp_final_avanzado_bbdd_4to`;

CREATE TABLE `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `descripcion_corta` varchar(255) NOT NULL,
  `descripcion_larga` text NOT NULL,
  `precio` decimal(8,2) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO `tp_final_avanzado_bbdd_4to`.`productos`
(`nombre`,
`descripcion_corta`,
`descripcion_larga`,
`precio`,
`imagen`)
VALUES
('Laptop',
'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus eius doloremque, quas ducimus quod cumque.',
'Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda dolorem, commodi ab maiores qui totam voluptas laboriosam ad quae ducimus quo voluptatibus ut quibusdam ratione maxime corporis quod tempore, atque debitis enim pariatur eaque! Veritatis placeat, maiores odit quia ut aperiam iure impedit vitae quo doloribus, non officiis optio minima nesciunt quos eveniet magnam alias modi voluptatum error. Fuga, quia?',
550.55,
09726305e74bab5e09c9d6c9672e6085.jpg), ('Tablet', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae explicabo molestiae reprehenderit sequi cum doloremque!', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident fugiat numquam ipsa? Deserunt nesciunt officiis voluptas, architecto, dolores voluptatibus perspiciatis atque sunt veritatis officia ipsam dicta sit perferendis omnis aspernatur provident dolorum cum ullam. Quae magnam praesentium officiis libero accusamus ab necessitatibus perspiciatis saepe, nemo veritatis fuga autem, dolores, animi laudantium vitae nihil rem. Veritatis blanditiis ab optio esse excepturi.', 1995.05, '6297c1e8086a32269c365a290a03f362.jpg');