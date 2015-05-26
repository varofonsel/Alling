-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 26-05-2015 a las 11:15:52
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `webfinal`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `datos`
-- 

CREATE TABLE `datos` (
  `datos_id` int(4) NOT NULL auto_increment,
  `fisico_peso` varchar(10) NOT NULL default '',
  `fisico_estatura` varchar(20) NOT NULL default '',
  `deportes` varchar(1000) NOT NULL default '',
  `vicios1` varchar(1000) NOT NULL default '',
  `vicios2` varchar(1000) NOT NULL default '',
  `vicios3` varchar(1000) NOT NULL default '',
  `television` varchar(1000) NOT NULL default '',
  `musica_bandas` varchar(1000) NOT NULL default '',
  `musica_temas` varchar(1000) NOT NULL default '',
  `libros` varchar(1000) NOT NULL default '',
  `autores_libros` varchar(1000) NOT NULL default '',
  `t_provincia` varchar(1000) NOT NULL default '',
  `t_ciudad` varchar(1000) NOT NULL default '',
  `estado_civil` varchar(70) NOT NULL default '',
  `hijos` varchar(35) NOT NULL default '',
  `s1` varchar(2000) NOT NULL default '',
  `s2` varchar(2000) NOT NULL default '',
  `s3` varchar(2000) NOT NULL default ' ',
  `d_usuario_nombre` varchar(32) NOT NULL default '',
  `d_us_id` varchar(32) NOT NULL default '',
  PRIMARY KEY  (`datos_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `datos`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `fotoperfil`
-- 

CREATE TABLE `fotoperfil` (
  `id` int(11) NOT NULL auto_increment,
  `fotoperfil` varchar(60) NOT NULL,
  `u_no_fp` varchar(40) NOT NULL,
  `u_id_fp` varchar(40) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `fotoperfil`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `fotos`
-- 

CREATE TABLE `fotos` (
  `id` int(11) NOT NULL auto_increment,
  `Foto1` varchar(60) NOT NULL,
  `u_no_f` varchar(40) NOT NULL,
  `u_id_f` varchar(40) NOT NULL,
  `u_ex_f` varchar(40) NOT NULL,
  `descripcion_f` varchar(4100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `fotos`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `mensaje`
-- 

CREATE TABLE `mensaje` (
  `ID` int(9) unsigned NOT NULL auto_increment,
  `para` varchar(180) default NULL,
  `de` varchar(180) default NULL,
  `leido` varchar(180) default NULL,
  `fecha` varchar(180) default NULL,
  `asunto` varchar(180) default NULL,
  `texto` text,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `mensaje`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `usuarios`
-- 

CREATE TABLE `usuarios` (
  `usuario_id` int(4) NOT NULL auto_increment,
  `usuario_nombre` varchar(15) NOT NULL default '',
  `usuario_clave` varchar(32) NOT NULL default '',
  `usuario_email` varchar(50) NOT NULL default '',
  `fecha` varchar(50) NOT NULL default '',
  `mes` varchar(50) NOT NULL default '',
  `dia` varchar(50) NOT NULL default '',
  `nombre` varchar(80) NOT NULL default '',
  `apellido` varchar(80) NOT NULL default '',
  `sexo` varchar(50) NOT NULL default '',
  `pais` varchar(80) NOT NULL default '',
  PRIMARY KEY  (`usuario_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `usuarios`
-- 
