SET ANSI_NULLS ON
SET QUOTED_IDENTIFIER ON
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Suscriptor] (
		[SuscriptorId]     [int] NOT NULL,
		[Nombre]           [varchar](50) COLLATE Modern_Spanish_CI_AS NULL,
		[Apellido]         [varchar](50) COLLATE Modern_Spanish_CI_AS NULL,
		[Email]            [varchar](50) COLLATE Modern_Spanish_CI_AS NULL,
		[Telefono]         [varchar](8) COLLATE Modern_Spanish_CI_AS NULL,
		CONSTRAINT [PK__Suscript__03ED70B23DC0EA30]
		PRIMARY KEY
		CLUSTERED
		([SuscriptorId])
	ON [PRIMARY]
) ON [PRIMARY]
GO
ALTER TABLE [dbo].[Suscriptor] SET (LOCK_ESCALATION = TABLE)
GO
