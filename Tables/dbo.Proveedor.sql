SET ANSI_NULLS ON
SET QUOTED_IDENTIFIER ON
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Proveedor] (
		[ProveedorId]     [int] NOT NULL,
		[Nombre]          [varchar](70) COLLATE Modern_Spanish_CI_AS NULL,
		[Direccion]       [varchar](100) COLLATE Modern_Spanish_CI_AS NULL,
		[Telefono]        [varchar](20) COLLATE Modern_Spanish_CI_AS NULL,
		[Email]           [varchar](50) COLLATE Modern_Spanish_CI_AS NULL,
		CONSTRAINT [PK__Proveedo__61266A59037DE612]
		PRIMARY KEY
		CLUSTERED
		([ProveedorId])
	ON [PRIMARY]
) ON [PRIMARY]
GO
ALTER TABLE [dbo].[Proveedor] SET (LOCK_ESCALATION = TABLE)
GO
