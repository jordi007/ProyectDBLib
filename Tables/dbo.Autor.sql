SET ANSI_NULLS ON
SET QUOTED_IDENTIFIER ON
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Autor] (
		[AutorId]             [int] NOT NULL,
		[Nombre]              [varchar](50) COLLATE Modern_Spanish_CI_AS NULL,
		[Apellido]            [varchar](50) COLLATE Modern_Spanish_CI_AS NULL,
		[Seudonimo]           [varchar](30) COLLATE Modern_Spanish_CI_AS NULL,
		[FechaNacimiento]     [date] NULL,
		[Nacionalidad]        [varchar](30) COLLATE Modern_Spanish_CI_AS NULL,
		CONSTRAINT [PK__Autor__F58AE929E291317E]
		PRIMARY KEY
		CLUSTERED
		([AutorId])
	ON [PRIMARY]
) ON [PRIMARY]
GO
ALTER TABLE [dbo].[Autor] SET (LOCK_ESCALATION = TABLE)
GO
